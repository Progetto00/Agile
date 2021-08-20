@extends('layouts.frame-public')

@section('content')

    <body class="page body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_hide sidebar_outer_hide">

    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>

            <div class="top_panel_title top_panel_style_3  title_present breadcrumbs_present scheme_original">
                <div class="top_panel_title_inner top_panel_inner_style_3  title_present_inner breadcrumbs_present_inner">
                    <div class="content_wrap" style="background-color:white">
                        <h1 class="page_title">Chi Siamo</h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="{{ route('dashboard') }}">Home</a>
                            <span class="breadcrumbs_delimiter"></span>
                            <span class="breadcrumbs_item current">Chi Siamo</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page_content_wrap page_paddings_yes">
                <div class="">
                    <div class="content">
                        <article class="post_item post_item_single page type-page">
                            <div class="post_content">

                                <section class="light_section">
                                    <div class="container">
                                        <div class="content_wrap">
                                            <div class="sc_call_to_action sc_call_to_action_style_1 sc_call_to_action_align_center responsive_margins sc_no_image">
                                                <div class="sc_call_to_action_info">
                                                    <h6 class="sc_call_to_action_subtitle sc_item_subtitle">Chi siamo</h6>
                                                    <div class="sc_call_to_action_descr sc_item_descr">
                                                        Il sito che è stato creato, ha lo scopo di gestire al meglio richieste di eventi di ogni tipo. </br>
                                                        All'interno del sito infatti, l'utente sarà in grado di scegliere l'evento che più
                                                        gli piace, selezionandolo a seconda delle proprie preferenze, quali artisti e generi preferiti</br>
                                                        Molte altre funzionalità sono incluse effettuando la registrazione al sito, accedi e scoprile!
                                                        Ti apettiamo!!!
                                                    </div>
                                                    <div class="sc_call_to_action_buttons sc_item_buttons ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="grey_section">
                                    <div class="container">
                                        <div class="content_wrap">
                                            <div class="sc_testimonials sc_testimonials_style_testimonials-4 sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom sc_slider_height_auto responsive_margins" data-interval="6618" data-slides-per-view="3" data-slides-space="30">
                                                <h2 class="sc_testimonials_title sc_item_title">Amministratori</h2>
                                                <div class="slides swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sc_testimonial_item">
                                                            <div class="sc_testimonial_avatar">
                                                                <img alt="" src="dist/img/avatar1.png">
                                                            </div>
                                                            <div class="sc_testimonial_content">Web Developer.</div>
                                                            <div class="sc_testimonial_author">
                                                                <span class="sc_testimonial_author_name">Maurizio Di Carlo</span>
                                                                <span class="sc_testimonial_author_position">Website Designer and DB Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sc_testimonial_item">
                                                            <div class="sc_testimonial_avatar">
                                                                <img alt="" src="dist/img/avatar4.png">
                                                            </div>
                                                            <div class="sc_testimonial_content">Web Developer</div>
                                                            <div class="sc_testimonial_author">
                                                                <span class="sc_testimonial_author_name">Leonardo Casciani</span>
                                                                <span class="sc_testimonial_author_position">Backend Area</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sc_testimonial_item">
                                                            <div class="sc_testimonial_avatar">
                                                                <img alt="" src="dist/img/avatar.png">
                                                            </div>
                                                            <div class="sc_testimonial_content">Web Developer.</div>
                                                            <div class="sc_testimonial_author">
                                                                <span class="sc_testimonial_author_name">Emanuele Traversa</span>
                                                                <span class="sc_testimonial_author_position">Software Developer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="sc_slider_controls_wrap">
                                                    <a class="sc_slider_prev" href="#"></a>
                                                    <a class="sc_slider_next" href="#"></a>
                                                </div>
                                                <div class="sc_slider_pagination_wrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="light_section">
                                    <div class="container">
                                        <div class="content_wrap">
                                            <div class="columns_wrap sc_columns columns_nofluid sc_column_item_with_margin sc_columns_count_3 responsive_margins" style="width: 1400px">
                                                <div class="column-1_3 sc_column_item sc_column_item_1 odd first">
                                                    <h3 class="sc_title margin_bottom_40">I nostri servizi</h3>
                                                    <div class="margin_bottom_20">
                                                        <p>EventManagment è il sito di biglietteria, marketing, informazione per eventi di musica, spettacolo.</p>
                                                    </div>
                                                    <ul class="sc_list sc_list_style_ul">
                                                        <li class="sc_list_item odd">Possibile creazione di eventi tramite clienti</li>
                                                        <li class="sc_list_item odd first">Prenotazione biglietti eventi</li>
                                                        <li class="sc_list_item even">Creazione e prenotazione per Eventi</li>
                                                        <li class="sc_list_item odd">Creazione e discussione di Topics sugli eventi</li>
                                                        <li class="sc_list_item odd">Chat per utenti registrati nel sito</li>
                                                        <li class="sc_list_item odd">Creazione calendario per singolo utente con eventi d'interesse</li>
                                                    </ul>
                                                </div>
                                                <div class="column-1_3 sc_column_item sc_column_item_2 even">
                                                    <h3 class="sc_title margin_bottom_40">Le nostre competenze</h3>
                                                    <div class="margin_bottom_20">
                                                        <p>Siamo un team di giovani raggazi in cui ogniuno di noi si occupa di un compito ben preciso.</p>
                                                    </div>
                                                    <div class="sc_skills sc_skills_bar sc_skills_horizontal" data-type="bar" data-caption="Skills" data-dir="horizontal">
                                                        <div class="sc_skills_info">
                                                            <div class="sc_skills_label">Software Developer</div>
                                                        </div>
                                                        <div class="sc_skills_item sc_skills_style_1 odd first">
                                                            <div class="sc_skills_count sc_skills_count_style_2">
                                                                <div class="sc_skills_total" data-start="0" data-stop="80" data-step="1" data-max="100" data-speed="25" data-duration="1875" data-ed="">0</div>
                                                            </div>
                                                        </div>
                                                        <div class="sc_skills_info">
                                                            <div class="sc_skills_label">Backend area</div>
                                                        </div>
                                                        <div class="sc_skills_item sc_skills_style_1 odd">
                                                            <div class="sc_skills_count sc_skills_count_style_2">
                                                                <div class="sc_skills_total" data-start="0" data-stop="80" data-step="1" data-max="100" data-speed="15" data-duration="1200" data-ed="">0</div>
                                                            </div>
                                                        </div>
                                                        <div class="sc_skills_info">
                                                            <div class="sc_skills_label">Website designer & Database designer</div>
                                                        </div>
                                                        <div class="sc_skills_item sc_skills_style_1 odd">
                                                            <div class="sc_skills_count sc_skills_count_style_2">
                                                                <div class="sc_skills_total" data-start="0" data-stop="80" data-step="1" data-max="100" data-speed="15" data-duration="1200" data-ed="">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 sc_column_item sc_column_item_3 odd" style="width: 450px;">
                                                    <h3 class="sc_title margin_bottom_40">Perchè scegliere noi?</h3>
                                                    <div class="sc_accordion sc_accordion_style_1" data-active="0">
                                                        <div class="sc_accordion_item odd first">
                                                            <p>E' un sito user-friendly, semplice ed intuitivo in modo tale da essere navigato da qualsiasi utente.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="scroll_to_top icon-angle-up" title=""></a>

    <script type='text/javascript' src='dist/js/vendor/jquery-1.11.3.min.js'></script>
    <script type='text/javascript' src='dist/js/vendor/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='dist/js/vendor/__packed.js'></script>

    <script type='text/javascript' src='dist/js/custom/core.utils.min.js'></script>
    <script type='text/javascript' src='dist/js/custom/core.init.min.js'></script>
    <script type='text/javascript' src='dist/js/custom/shortcodes.min.js'></script>
    <script type='text/javascript' src='dist/js/custom/_main.js'></script>
    </body>
@endsection

