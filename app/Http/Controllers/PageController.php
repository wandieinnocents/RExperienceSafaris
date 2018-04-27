<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Transport;
use App\Models\Accomodation;

class PageController extends Controller
{
  /**
   * shows the pages generated using backpack pagemanager
   * @param  \Illuminate\Http\Request  $slug
   * @return \Illuminate\Http\Response
   */
  public function index($slug)
  {
      $page = Page::findBySlug($slug);

      if (!$page)
      {
          abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
      }

      $this->data['title'] = $page->title;
      $this->data['page'] = $page->withFakes();

      return view('pages.'.$page->template, $this->data);
  }

  /**
   * show the welcome page
   * @return \Illuminate\Http\Response
   */
  public function welcome()
  {
    return view('welcome');
  }



}
