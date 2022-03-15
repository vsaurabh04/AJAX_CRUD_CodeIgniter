<?php 
namespace App\Models;
use CodeIgniter\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'fname',
        'lname',
        'dept',
        'email',
        'mobile'
    ];
}
?>