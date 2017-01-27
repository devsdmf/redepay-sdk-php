<?php
namespace RedePay\Url;

class Url {
	use \RedePay\Utils\Fillable;

	/**
	 * @param String
     */
	private $kind;

	/**
	 * @param String
     */
	private $url;

	/**
	 * @param Url
     */
	public function __construct($data = null) {
		if(isset($data)) {
			$this->fill($data);
		}
	}

	/**
	 * @return String
     */
	public function getKind() {
		return $this->kind;
	}

	/**
	 * @return String
     */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param String
     */
	public function setKind($kind) {
		$this->kind = $kind;
	}

	/**
	 * @param String
     */
	public function setUrl($url) {
		$this->url = $url;
	}
}