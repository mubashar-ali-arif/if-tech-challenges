<?php
/*
	Class: Insurance
*/

class Insurance
{

    private $providers = array();
    private $quote = array();
    private $bankUrl = "";
    private $insuranceUrl = "";
    private $config = [];

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->config = $GLOBALS['app_config'];
        $this->providers = $this->config['default_insurance_providers'];
        $this->bankUrl = $this->config['bank_url'];
        $this->insuranceUrl = $this->config['insurance_url'];
    }
	/**
     * @param String $providers
     * @return array $quote
     */
    public function getQuote($providers = null)
    {

        $this->providers = ($providers) ? [$providers] : $this->providers;

        for ($i = 0;$i < count($this->providers);$i++)
        {

            switch ($this->providers[$i])
            {

                case 'bank':
                    $prices = readFileContent($this->bankUrl);
                break;

                case 'insurance-company':
                    $prices = callCurl($this->insuranceUrl, array(
                        'month' => $this->config['month']
                    ));
                break;

                default:
                break;
            }
            $this->quote[$this->providers[$i]] = $prices;
        }
        return $this->quote;
    }
}

