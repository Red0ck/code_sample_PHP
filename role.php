<?php

class Role
{
    private $name;
    private $permissions;

    public function __construct($name, $permissions = array())
    {
        $this->name = $name;
        $this->permissions = $permissions;
    }

    public function getName()
    {
        return  $this->name;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }

    public function addPermission($permission)
    {
        $this->permissions[] = $permission;
    }

    public function removePermission($permission)
    {
        unset($this->permissions[array_search($permission, $this->permissions)]);
    }
}
