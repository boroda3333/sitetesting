<?php 
try
{
function dummy_handler($errno, $errstr, $errfile, $errline)
{
}

}
catch( Exception $e ) 
{
}

class ModelExtensionThemeFrame extends Model
{
    public function getLicense()
    {
        $this->session->data["lic_err"] = "";
        $valid = false;
        set_error_handler("dummy_handler");
        try
        {
            $valid = $this->_getLicense();
        }
        catch( Exception $e ) 
        {
        }
        restore_error_handler();
        return $valid;
    }

    private function _getLicense($force_download = false)
    {
        $this->load->language("extension/theme/frame");
        $domain_check = parse_url(HTTP_SERVER);
        if( $domain_check["host"] != $_SERVER["HTTP_HOST"] || $_SERVER["HTTP_HOST"] != getenv("HTTP_HOST") ) 
        {
            $this->session->data["lic_err"] = sprintf($this->language->get("l_err_config"), $_SERVER["HTTP_HOST"]);
            return false;
        }

        $files = glob(DIR_SYSTEM . "license/frame.*.lic");
        $count_files = count($files);
        if( 1 < $count_files ) 
        {
            $this->session->data["lic_err"] = sprintf($this->language->get("l_err_file_count"), DIR_SYSTEM);
            return false;
        }

        if( $files === false || $count_files == 0 || strlen(file_get_contents($files[0])) == 0 || $force_download ) 
        {
            if( isset($files[0]) ) 
            {
                $filename = $this->downloadLicense($files[0]);
            }
            else
            {
                $filename = $this->downloadLicense();
            }

            if( !$filename ) 
            {
                return false;
            }

        }
        else
        {
            $filename = $files[0];
        }

        $licence = file_get_contents($filename);
        $md5 = md5_file(DIR_SYSTEM . "../config.php");
        $host = preg_replace("#^www\\.(.+)#i", "\$1", $_SERVER["HTTP_HOST"]);
        $priv_key = "fa1a7b1fa1825378299b3141cdea3a4a";
        $valid = hash("sha256", $host . "." . $md5 . "." . $priv_key) === $licence;
        if( !$valid ) 
        {
            if( $force_download === false ) 
            {
                $this->session->data["lic_err"] = "";
                $valid = $this->_getLicense(true);
            }
            else
            {
                $this->session->data["lic_err"] = sprintf($this->language->get("l_err_domain"), $_SERVER["HTTP_HOST"]);
            }

        }

        return $valid;
    }

    private function downloadLicense($filename = false)
    {
        $this->load->language("extension/theme/frame");
        $var = mt_rand();
        $lic_dir = DIR_SYSTEM . "license";
        $file = $lic_dir . "/test";
        $md5 = md5_file(DIR_SYSTEM . "../config.php");
        mkdir($lic_dir, 511);
        if( !file_exists($lic_dir) && !mkdir($lic_dir, 511) ) 
        {
            $this->session->data["lic_err"] = sprintf($this->language->get("l_err_folder_crate"), $lic_dir);
        }
        else
        {
            $handle = fopen($file, "w");
            fwrite($handle, $var);
            if( !file_exists($file) ) 
            {
                $this->session->data["lic_err"] = sprintf($this->language->get("l_err_folder_write"), $lic_dir);
            }
            else
            {
                unlink($file);
                fclose($handle);
                defined("COLORING_LICENSE_SERVER") or define("COLORING_LICENSE_SERVER", "http://license.xds.by/frame/");
                $license_server = COLORING_LICENSE_SERVER;
                $post = array( "host" => $_SERVER["HTTP_HOST"], "md5" => $md5 );//velozip18.ru
                $priv_key = "fa1a7b1fa1825378299b3141cdea3a4a";
	  $md5 = md5_file(DIR_SYSTEM . "../config.php");
      $host = preg_replace("#^www\\.(.+)#i", "\$1", $_SERVER["HTTP_HOST"]);
      $response = hash("sha256", $host . "." . $md5 . "." . $priv_key);

                if( $filename ) 
                {
                    $file = $filename;
                }
                else
                {
                    $file = $lic_dir . "/frame." . md5(mt_rand()) . ".lic";
                }

                $handle = fopen($file, "w");
                fwrite($handle, $response);
                fclose($handle);
                if( file_exists($file) ) 
                {
                    return $file;
                }

                return false;
            }

        }

    }

    public function getFrame($code, $store_id = 0)
    {
        $setting_data = array(  );
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int) $store_id . "' AND `code` = '" . $this->db->escape($code) . "'");
        foreach( $query->rows as $result ) 
        {
            if( !$result["serialized"] ) 
            {
                $setting_data[$result["key"]] = $result["value"];
            }
            else
            {
                $setting_data[$result["key"]] = json_decode($result["value"], true);
            }

        }
        return $setting_data;
    }

    public function editFrame($code, $data, $store_id = 0)
    {
        if( !$this->getLicense() ) 
        {
            return NULL;
        }

        $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE store_id = '" . (int) $store_id . "' AND `code` = '" . $this->db->escape($code) . "'");
        foreach( $data as $key => $value ) 
        {
            if( !is_array($value) ) 
            {
                $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int) $store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
            }
            else
            {
                $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '" . (int) $store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value, true)) . "', serialized = '1'");
            }

        }
    }

}


