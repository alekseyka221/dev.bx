<?php

namespace AlexShah{

	abstract class Figures
	{
		protected $line;
		protected $column;
		public function __construct($a, $b)
		{
			if(is_numeric($a) && $a >= 1 && $a <= 8)
			{
				if (is_numeric($b) && $b >= 1 && $b <= 8)
				{
					$this->column = $a;
					$this->line = $b;
				}
				else
				{
					exit('Указано неверное значение');
				}
			}
			else
			{
				exit('Указано неверное значение');
			}
		}
		abstract public function checkAttack($column, $line);
	}

	class Rook extends Figures
	{
		public function __construct($a, $b)
		{
			parent::__construct($a,$b);
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
		public function __construct($a, $b)
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