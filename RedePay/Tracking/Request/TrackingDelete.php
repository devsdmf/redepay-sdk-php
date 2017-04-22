<?php

namespace RedePay\Tracking\Request;

use \RedePay\Utils\RequestInterface;

/**
 * Class TrackingDelete
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
class TrackingDelete implements RequestInterface {
	private $tracking;
	private $transactionId;

	public function __construct($tracking, $transactionId) {
        $this->tracking = $tracking;
        $this->transactionId = $transactionId;
    }

	public function getPayload() {
		$reason = $this->tracking->getReason();
		
		$parameters = array(
			"reason" => $reason
		);
		return json_encode($parameters, JSON_UNESCAPED_UNICODE);
	}

    public function getTransactionId() {
        return $this->transactionId;
    }

	public function getPath() {
		return sprintf("%s/transactions/%s/trackings", $this->getApiUrl(), $this->getTransactionId());
	}

	public function getData() {
		return null;
	}

	public function getMethod() {
		return self::HTTP_DELETE;
	}

	public function getApiUrl() {
		return self::API_URL;
	}
}
