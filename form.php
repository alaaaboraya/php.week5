public function __construct(attributes) 
{
if (!validator::email(this->attributes[$email])){
$this ->errors['email']='please provide a vaild email address.';

if (!validator::string(this->attributes[$password])){
$this ->errors['password']='please provide a vaild password.';
}

}
public static function validate($attributes)
{
$instancce = new static($attributes);
return $instancce -> failed() ? $instance ->throm():$instance;
}

public function throw(){
validtionException :: throw ($this -> errors()$this -> attributes);
}
public function failed()  {
return count ($this -> errors);
}


public function errors()  
{}