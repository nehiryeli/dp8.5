<?php 

namespace Drupal\committees\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CommitteesController extends ControllerBase
{
	public function content()
	{
		$build = [
		'#markup' => t('Hello World!'),
		];
		return $build;
	}
}
