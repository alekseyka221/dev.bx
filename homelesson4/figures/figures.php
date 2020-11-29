<?php

namespace AlexShah{

	abstract class Figures
	{
		protected $line;
		protected $column;
		function __construct($a, $b)
		{
			$this->column = $a;
			$this->line = $b;
		}
		function __set($name, $value)
		{
			if(is_numeric($value) && $value >= 1 && $value <= 8)
			{
				$this->$name = $value;
			}
		}
		abstract public function checkAttack($column, $line);
	}

	class Rook extends Figures
	{
		function __construct($a, $b)
		{
			parent::__construct($a,$b);
		}
		function __set($a, $b)
		{
			parent::__set($a, $b);
		}
		public function checkAttack($column, $line) : string
		{
			if($line == $this->line || $column == $this->column)
			{
				return 'ДА';
			}
			else
			{
				return 'НЕТ';
			}
		}
	}

	class Queen extends Rook
	{
		function __construct($a, $b)
		{
			parent::__construct($a,$b);
		}
		public function checkAttack($column, $line) : string
		{
			if (parent::checkAttack($column, $line) == 'ДА')
			{
				return 'ДА';
			}
			for($curLine = $this->line, $curColumn = $this->column;
			$curLine <= 8 && $curColumn <= 8; $curLine++, $curColumn++)
			{
				if ($line == $curLine && $column == $curColumn)
				{
					return 'ДА';
				}
			}
			for($curLine = $this->line, $curColumn = $this->column;
			$curLine >= 1 && $curColumn <= 8; $curLine--, $curColumn++)
			{
				if ($line == $curLine && $column == $curColumn)
				{
					return 'ДА';
				}
			}
			for($curLine = $this->line, $curColumn = $this->column;
			$curLine <= 8 && $curColumn >= 1; $curLine++, $curColumn--)
			{
				if ($line == $curLine && $column == $curColumn)
				{
					return 'ДА';
				}
			}
			for($curLine = $this->line, $curColumn = $this->column;
			$curLine >= 1 && $curColumn >= 1; $curLine--, $curColumn--)
			{
				if ($line == $curLine && $column == $curColumn)
				{
					return 'ДА';
				}
			}
			return 'НЕТ';
		}
	}

}