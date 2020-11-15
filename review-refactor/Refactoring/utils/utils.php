<?php
/**
 * @param String $filePath
 * @return Boolean
 */
function readFileContent($filePath)
{
    $isFileExist = file_exists($filePath) ? true : false;
    if ($isFileExist) return file_get_contents($filePath);
    return 0;
}

/**
 * @param String $serviceURL
 * @param array $postData
 * @return int / flot $price
 */
function callCurl($serviceURL, $postData)
{
    $price = 0;
    try
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $serviceURL,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $postData
        ));

        $price = curl_exec($curl);
        if (curl_errno($curl))
        {
            echo 'Request Error:' . curl_error($curl);
        }
        curl_close($curl);
        return ($price) ? json_decode($price) : 0;
    }
    catch(Exception $e)
    {
        throw new Exception('Caught exception: ', $e->getMessage());
    }
}

