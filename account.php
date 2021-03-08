<?php

class Account
{

    private $name;
    private $surname;
    private $login;
    private $password;

    private $permissions;
    private $roles;

    public function __construct($name, $surname, $login, $password, $permissions = array())
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
        $this->password = md5($password);
        $this->permissions = $permissions;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->surname;
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

    public function checkPermission($permission)
    {
        if (array_search($permission, $this->permissions) !== false) {
            return true;
        } else {
            foreach ($this->roles as $key => $value) {
                if (array_search($permission, $value->getPermissions()) !== false)
                    return true;
            }
        }
        return false;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function addRole(Role $role)
    {
        $this->roles[$role->getName()] = $role;
    }

    public function removeRole($name)
    {
        unset($this->roles[$name]);
    }

    public function changePassword($password)
    {
        $this->password = md5($password);
    }

    public function checkPassword($password)
    {
        return $this->password == md5($password) ? 'Correct password' : 'Wrong password';
    }
}
