<?php

namespace Service;

use Customer\CustomerRepository;

class SomeService
{
	/** @var CustomerRepository */
	private $customerRepository;

	public function __construct(CustomerRepository $customerRepository)
	{
		$this->customerRepository = $customerRepository;
	}

	public function doWork()
	{
		$customer = $this->customerRepository->findOneByUuid('1');

		$customer->nonExistingMethod();
	}

}