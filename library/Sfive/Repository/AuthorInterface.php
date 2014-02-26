<?php

namespace Sfive\Repository;

interface AuthorInterface
{
    public function findByUserId($id);

    public function findByEmailAddress($eMailAddress);

    public function findByUsername($username);

    public function insert($entity);

    public function update($entity);
}
