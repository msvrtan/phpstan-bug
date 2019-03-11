<?php

namespace Customer;

class CustomerRepository
{
	public function findOneByUuid($uuid): ?CustomerEntity
	{
		return new CustomerEntity();
	}

	public function findXOneByUuid($uuid): ?CustomerEntity
	{
		return new CustomerEntity();
	}
}