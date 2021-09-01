@extends('layouts.frame-public')

@section('content')


    <div class="body_wrap  bg_color_1" style="background-color: #9ab8e53b">
        <div class="page_wrap" style="background-color: #f4f8f9">
            <div class="top_panel_fixed_wrap"></div>

            <div class="top_panel_title top_panel_style_1  title_present breadcrumbs_present scheme_original">
                <div class="top_panel_title_inner top_panel_inner_style_1  title_present_inner breadcrumbs_present_inner" style="background-color:white">
                    <div class="content_wrap">
                        <h1 class="page_title" style="color: black">Pricing</h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" style="color: black" href="{{ route('dashboard') }}">Home</a>
                            <span class="breadcrumbs_delimiter" style="color: black" ></span>
                            <span class="breadcrumbs_item current" style="color: black">Pricing</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page_content_wrap page_paddings_no" style="background-color:white">
                <div class="">
                    <div class="content">
                        <article class="post_item post_item_single page type-page">
                            <div class="post_content">

                                <section class="light_section">
                                    <div class="container">
                                        <div class="content_wrap">
                                            <div class="sc_section responsive_margins sc_aligncenter">
                                                <div class="sc_section_inner">
                                                    <h2 class="sc_title">Le nostre offerte</h2>
                                                    <div class="sc_line sc_line_style_1 sc_line_style_solid"></div>
                                                    <h5 class="sc_undertitle sc_undertitle_style_1">
                                                        La nostra piattaforma permette di scegliere l'<strong>offerta</strong> che desideri!
                                                        Dai un'occhiata alle nostre offerte e <strong>scegli</strong> quella che fa più per te!
                                                    </h5>
                                                    <div class="sc_price_block sc_price_block_style_1">
                                                        <div class="sc_price_block_title">Only</div>
                                                        <div class="sc_price_block_money">
                                                            <div class="sc_price">
                                                                <span class="sc_price_currency">€</span><span class="sc_price_money"></span>15<span class="sc_price_info"><span class="sc_price_penny">.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="sc_price_block_description">
                                                            <strong>
                                                                <span>2</span>
                                                            </strong>
                                                            Giorni<br />
                                                            <strong>
                                                                <span>2</span>
                                                            </strong>
                                                            Eventi<br />
                                                            <strong>
                                                                <span>2</span>
                                                            </strong>
                                                            Artisti Diversi<br />
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="{{ route('carrello') }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Compra</a>
                                                        </div>
                                                    </div>
                                                    <div class="sc_price_block sc_price_block_style_1 iconed">
                                                        <div class="sc_price_block_icon icon-star">
                                                        </div>
                                                        <div class="sc_price_block_title">Standard</div>
                                                        <div class="sc_price_block_money">
                                                            <div class="sc_price">
                                                                <span class="sc_price_currency">€</span><span class="sc_price_money">45</span><span class="sc_price_info"><span class="sc_price_penny">.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="sc_price_block_description">
                                                            <strong>
                                                                <span>5</span>
                                                            </strong>
                                                            Giorni<br />
                                                            <strong>
                                                                <span>5</span>
                                                            </strong>
                                                            Eventi<br />
                                                            <strong>
                                                                <span>5</span>
                                                            </strong>
                                                            Artisti Diversi<br />
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="{{ route('carrello') }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Compra</a>
                                                        </div>
                                                    </div>
                                                    <div class="sc_price_block sc_price_block_style_1">
                                                        <div class="sc_price_block_icon icon-star">
                                                        </div>
                                                        <div class="sc_price_block_title">Premium</div>
                                                        <div class="sc_price_block_money">
                                                            <div class="sc_price">
                                                                <span class="sc_price_currency">€</span><span class="sc_price_money">90</span><span class="sc_price_info"><span class="sc_price_penny">.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="sc_price_block_description">
                                                            <strong>
                                                                <span>12</span>
                                                            </strong>Giorni<br />
                                                            <strong>
                                                                <span>12</span>
                                                            </strong>Eventi<br />
                                                            <strong>
                                                                <span>12</span>
                                                            </strong>Artisti Diversi<br />
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="{{ route('carrello') }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Compra</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="grey_section">
                                    <div class="container">
                                        <div class="content_wrap">
                                            <div  class="sc_any_shortcode responsive_margins">
                                                <h2 class="sc_any_shortcode_title sc_item_title">Domande più frequenti</h2>
                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_35">
                                                    <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                                        <h6 class="sc_title sc_title_style_3">Bisogna registrarsi prima di acquistare un biglietto?</h6>
                                                        <div class="margin_bottom_45">
                                                            <p>Si, per poter accedere tramite il nostro apposito login.</p>
                                                        </div>
                                                        <h6 class="sc_title sc_title_style_3">Ci sono vincoli nell'acquisto di un biglietto?</h6>
                                                        <div class="margin_bottom_45">
                                                            <p>No, non ci sono vincoli di acquisto su nessun biglietto, esso può essere revocato senza costi aggiuntivi</p>
                                                        </div>
                                                        <h6 class="sc_title sc_title_style_3">E' possibile scegliere combinazioni sugli eventi?</h6>
                                                        <div class="">
                                                            <p>In un'offerta è possibile scegliere gli eventi in cui si vuole partecipare e gli artisti preferiti</p>
                                                        </div>
                                                    </div><div class="column-1_2 sc_column_item sc_column_item_2 even">
                                                        <h6 class="sc_title sc_title_style_3">E' possibile scegliere date in base al cliente?</h6>
                                                        <div class="margin_bottom_45">
                                                            <p>Si, è possibile scegliere le date relative ai concerti in base alla preferenza del cliente</p>
                                                        </div>
                                                        <h6 class="sc_title sc_title_style_3">Il biglietto è rimborsabile in caso di smarrimento?</h6>
                                                        <div class="">
                                                            <p>Il biglietto è sempre presente nella casella postale della mail con la quale si effettua il login</p>
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
@endsection

