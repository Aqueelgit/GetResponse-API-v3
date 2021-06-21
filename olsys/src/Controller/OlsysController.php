<?php
namespace Drupal\olsys\Controller;

use Drupal\Core\Session\AccountInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\user\Entity\User;

use Drupal\Core\Render\Element;

use Drupal\Core\Routing\TrustedRedirectResponse; 

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Drupal\node\Entity\Node;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Component\Utility\Tags;
use Drupal\Component\Utility\Unicode;
Use Drupal\taxonomy\Entity\Term;
Use \Drupal\file\Entity\File;

use Drupal\Core\Database\Connection;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Mail\MailManagerInterface;
use Drupal\Component\Utility\SafeMarkup;
use Drupal\Component\Utility\Html;
use Drupal\olsys\Service\Api;

class OlsysController extends ControllerBase
{
  public function getDatalist () {
		global $base_url;
		$current_path = \Drupal::service('path.current')->getPath();
		$arg = explode('/', $current_path);
    
  //  API_URL_360_COM = 'https://api3.getresponse360.com/v3';
  //  API_URL_360_PL = 'https://api3.getresponse360.pl/v3';
  //  API_URL_SMB = 'https://api.getresponse.com/v3';
    $url = $base_url.$_SERVER['REQUEST_URI'];

    $campaignslist = new Api('xxxxxxxxxxxxxxxxxxxxxxxxxxxx', $api_url = NULL, $domains = NULL);
    //$webforms = $campaignslist->getForms();
   // $webforms = $campaignslist->getCustomFields();
    // $campaign = array('campaignId' => 'oND3y');
    // $refrence = array(
      // 'customFieldId' => 'V0fxUjK', 
      // 'value' => ['https://adse.net/tours/birds-and-tigers-of-himalayan-foothills']
    // );
    // $phone = "+87-5656677888";
    // $refrence_phone = array(
      // 'customFieldId' => 'V0PFNy', 
      // 'value' => [$phone]
    // );
    // $params = array(
        // 'email' => 'amir243@open.com',
        // 'campaign' => $campaign,
        // 'name' => 'Aqueel',
        // 'customFieldValues' => [$refrence, $refrence_phone]
    // );
    // $rs = $campaignslist->addContact($params);
    // $status = $campaignslist->http_status;
    //print '<pre>' . print_r(json_encode($params), true) .'</pre>';
     // print 'status<pre>' . print_r($status, true) .'</pre>';
    // print 'webforms<pre>' . print_r($webforms, true) .'</pre>';
		$form = array('data' => $url);

		return $form;

	}
}

?>