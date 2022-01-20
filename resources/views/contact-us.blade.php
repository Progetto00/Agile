@extends('layouts.frame-public')

@section('content')
    <body class="blog body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_show sidebar_right sidebar_outer_hide">
    <div class="body_wrap" style="background-color: #9ab8e536">
        <body class="page_wrap" style="background-color: #9ab8e585">
        <div class="top_panel_fixed_wrap"></div>
        <div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
            <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner" style="background-color:white">
                <div class="content_wrap">
                    <h1 class="page_title">Contattaci!</h1>
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="{{ route('dashboard') }}">Home</a>
                        <span class="breadcrumbs_delimiter">
                        </span>
                        <span class="breadcrumbs_item current">Contattaci</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('message_sent'))
            <div class="alert alert-success" role="alert" >
                {{Session::get('message_sent')}}
            </div>
        
                
            @endif
            
            <form method="POST" action="{{route('contact.send')}}"enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input type="number" name="phone" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="msg">Messaggio</label>
                    <textarea name="msg" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Invia</button>
        <div class="page_content_wrap with_padding page_paddings_yes" style="padding: 0">
        

            <div class="content_wrap">
                <div class="content">
                    <br/>
                    <div class="sidebar widget_area scheme_original" style="float: right;margin: 10px 20px;">
                        <div class="sidebar_inner widget_area_inner" style="background-color: #9ab8e585">
                            
                        </div>
                    </div>
                   
                           
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        </body>
    </div>

    <a href="#" class="scroll_to_top icon-angle-up" title=""></a>

    </body>
@endsection

