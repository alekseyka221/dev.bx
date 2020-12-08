<?php

class User
{
	private $name;
	private $eventBus;

	public const EVENT_ON_USER_ADD = 'onUserAdd';
	public const EVENT_ON_USER_DELETE = 'onUserDELETE';
	public function __construct(string $name, EventBus $eventBus)
	{
		$this->name = $name;
		$this->eventBus = $eventBus;
	}

	public function add(): void
	{
		echo "...Adding User {$this->name}\n";
		$this->eventBus->publish(self::EVENT_ON_USER_ADD, $this);
	}

	public function delete(): void
	{
		echo "...Deleting User {$this->name}\n";
		$this->eventBus->publish(self::EVENT_ON_USER_DELETE, $this);
	}

	public function getName(): string
	{
		return $this->name;
	}
}

class Logger
{
	public function log($message): void
	{
		echo "Logger: ".date("Y-m-d")." ".$message."\n";
	}
}

class Mailer
{
	public function sendMessage($message): void
	{
		echo "Message was sent: {$message}\n";
	}
}

class EventBus
{
	protected $subscribers = [];

	public function subscribe(string $eventType, callable $eventHandler): void
	{
		if(!isset($this->subscribers[$eventType]))
		{
			$this->subscribers[$eventType] = [];
		}

		$this->subscribers[$eventType][] = $eventHandler;
	}

	public function publish(string $eventType, $data) : void
	{
		if(is_array($this->subscribers[$eventType]))
		{
			foreach ($this->subscribers[$eventType] as $eventHandler)
			{
				$eventHandler($data);
			}
		}
	}
}

$logger = new Logger();
$mailer = new Mailer();
$eventBus = new EventBus();

$eventBus->subscribe(
	User::EVENT_ON_USER_ADD,
	function(User $user) use ($logger)
	{
		$logger->log("{$user->getName()} added");
	}
);

$eventBus->subscribe(
	User::EVENT_ON_USER_DELETE,
	function(User $user) use ($logger)
	{
		$logger->log("{$user->getName()} deleted");
	}
);

$eventBus->subscribe(
	User::EVENT_ON_USER_ADD,
	function(User $user) use ($mailer)
	{
		$mailer->sendMessage("Welcome to the club {$user->getName()} ");
	}
);

$user = new User('John Smith', $eventBus);

$user->add();
$user->delete();
