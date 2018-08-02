@extends('layouts.app')

@section('content')


        <div class="padding-top"></div>

        <?php

            foreach ($data as $entry)
                echo '
                <div class="panel panel-default">
                    <div class="panel-body">
                       <section class="post-heading">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="#">
                                          <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="40" height="40" alt="...">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <a href="/'.$entry->uri.'" class="anchor-username"><h4 class="media-heading">'.$entry->title.'</h4></a> 
                                        <a href="#" class="anchor-time">'.$entry->tagline.'</a>
                                      </div>
                                    </div>
                                </div>
                                 <div class="col-md-1">
                                        
                                 </div>
                            </div>             
                       </section>
                       <section class="post-body">
                            <p>'.$entry->about.'</p>
                       </section>
                    </div>
                </div>';

        ?>










@endsection
