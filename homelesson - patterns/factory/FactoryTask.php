<?php
interface Document
{
	public function print() : void;
}

abstract class DocumentFactory
{
	protected $text;


	public function __construct(string $text)
	{
		$this->text = $text;
	}
	abstract public function createExtension();
}

class TextDocumentFactory extends DocumentFactory
{
	public function getText() : void
	{
		echo $this->text;
	}
	public function createExtension(): Document
	{
		$report = new TextDocument($this->text);
		return $report;
	}
}

class PdfDocumentFactory extends DocumentFactory
{
	public function createExtension(): Document
	{
		$report = new PdfDocument();
		$report->setText($this->text);
		return $report;
	}
}

class DocumentPrinter
{
	public const DOCUMENT_TYPE_TEXT = 'text';
	public const DOCUMENT_TYPE_PDF = 'pdf';
	public static function printDocument(DocumentFactory $docFactory) : void
	{
		$report = $docFactory->createExtension();
		$report->print();
	}
	public static function printDocumentByType(string $type, string $text) : void
	{
		if ($type === self::DOCUMENT_TYPE_TEXT)
		{
			$factory = new TextDocumentFactory($text);
		}
		elseif ($type === self::DOCUMENT_TYPE_PDF)
		{
			$factory = new PdfDocumentFactory($text);
		}
		else
		{
			throw new Exception("wrong");
		}
		self::printDocument($factory);
	}
}

class TextDocument implements Document
{
	protected $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

	public function print(): void
	{
		echo "TextDocument: {$this->text}\n";
	}
}

class PdfDocument implements Document
{
	protected $text;

	public function setText(string $text): void
	{
		$this->text = $text;
	}

	public function print(): void
	{
		echo "PdfDocument: {$this->text}\n";
	}
}
