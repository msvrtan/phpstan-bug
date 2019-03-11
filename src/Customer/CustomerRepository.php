<?php

namespace Customer;

use Doctrine\ORM\EntityRepository;
class CustomerRepository extends EntityRepository
{
	public function findOneByUuid($uuid): ?CustomerEntity
	{
		return new CustomerEntity();
	}
}