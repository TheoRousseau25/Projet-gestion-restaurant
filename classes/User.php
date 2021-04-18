<?php
require_once(__DIR__ . '/Connexion.php');

class User
{

  protected string $login;
  protected string $password;

  /**
   * User constructor.
   * @param string $firstname
   * @param string $lastname
   * @param string $login
   * @param string $password
   */
  public function __construct( string $login, string $password)
  {
  
    $this->login = $login;
    $this->password = $password;

  }

  /**
   * @return string
   */
  public function getFirstname(): string
  {
    return $this->firstname;
  }

  /**
   * @param string $firstname
   * @return User
   */
  public function setFirstname(string $firstname): User
  {
    $this->firstname = $firstname;
    return $this;
  }

  /**
   * @return string
   */
  public function getLastname(): string
  {
    return $this->lastname;
  }

  /**
   * @param string $lastname
   * @return User
   */
  public function setLastname(string $lastname): User
  {
    $this->lastname = $lastname;
    return $this;
  }

  /**
   * @return string
   */
  public function getLogin(): string
  {
    return $this->login;
  }

  /**
   * @param string $login
   * @return User
   */
  public function setLogin(string $login): User
  {
    $this->login = $login;
    return $this;
  }

  /**
   * @return string
   */
  public function getPassword(): string
  {
    return $this->password;
  }

  /**
   * @param string $password
   * @return User
   */
  public function setPassword(string $password): User
  {
    $this->password = $password;
    return $this;
  }

  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function __toString(): string
  {
    return "$this->login : $this->firstname $this->lastname";
  }

  /**
   * Save the current user in the JSON file.
   */
  public function save(): void
  {
    $conn = Connexion::get();
    $input_parameters = [
      'id' => $this->id,
      'firstname' => $this->firstname,
      'lastname' => $this->lastname,
      'login' => $this->login,
      'password' => hash('sha256', $this->password),
    ];


    if (!$this->loginExists()) {
      $sql = 'INSERT INTO users (id, firstname, lastname, login, password) VALUES (:id, :firstname, :lastname, :login, :password)';
      if ($this->id) {
        $sql = 'UPDATE users SET lastname=:lastname, firstname=:firstname, password=:password, login=:login WHERE id=:id';
      }
      // $conn->lastInsertId() - Returns the ID of the last inserted row or sequence value
      $query = $conn->prepare($sql);
      $query->execute($input_parameters);
  } else {
      throw new Exception('This account already exists');
    }
  }

  /**
   * Check if the current login is already associated to an other User
   * @return bool
   */
  private function loginExists(): bool
  {
    $conn = Connexion::get();
    $sql = "SELECT login FROM admin WHERE login=:login";
    if ($this->id) {
      $sql .= " AND id != {$this->id}";
    }

    $query = $conn->prepare($sql);
    $query->execute(['login' => $this->login]);
    return !!$query->fetch();
  }

  /**
   * @param string $login
   * @param string $password
   * @return \User|null
   */
  public static function load(string $login, string $password): User
  {
    $conn = Connexion::get();
    $query = $conn->prepare('SELECT * FROM admin WHERE login=:login AND password=:password');
    $query->execute(['login' => $login, 'password' => $password]);
    if ($user = $query->fetch()) {
      return new User(

        $login,
        $password,
      
      );
    }
    throw new Exception("Mauvais identifiants.", 1);
  }

  /**
   * Get all users data from the file.
   * @return array
   */
  protected static function getAllUsersData(): array
  {
    $conn = Connexion::get();
    $query = $conn->query('SELECT * FROM users');
    return $query->fetchAll();
  }

  public function toArray():array {
    return [
      'login' => $this->getLogin(),
      'firstname' => $this->getFirstname(),
      'lastname' => $this->getLastname(),
      'password' => $this->getPassword(),
    ];
  }
}
