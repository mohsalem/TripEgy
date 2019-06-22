@extends('index')
@section('content')


<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/bootstrap-image-gallery.css">
<link rel="stylesheet" href="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/css/demo.css">
<div class="container">
    <h1>{{auth()->user()->name}} Company</h1>
    {{-- <blockquote>
        <p>Description hereDescription hereDescription hereDescription hereDescription hereDescription hereDescription hereDescription hereDescription hereDescription hereDescription here</p>
    </blockquote> --}}
    <form class="form-inline">
        @csrf
        <div class="form-group">
            <button id="Add-photos-to-gallery-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-picture"></i>
                <a href="{{ url('/homeofcompany') }}"></a>
                Add photos to gallery
            </button>
            <button id="Remove-photos-from-gallery-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-trash"></i>
                Remove photos from gallery
            </button>

            <button id=" Edit-description-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-edit"></i>
                Edit description
            </button>
            
            <a href="{{url('/create_event_page')}}">
            <button id="add-event-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-plus"></i>
               Add event             
               
            {{-- </button></a>   
            <a href="{{url('/allevent_page')}}">
            <button id="add-event-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-certificate"></i>
                Show me all my events            
               
            </button></a>    --}}
            
        </div>
        
    </form>
    
    <br>
    <!-- The container for the list of example images -->
    {{-- <div id="links"> --}}
        
        {{-- <a data-gallery="" title="Natalia" href="http://farm4.static.flickr.com/3741/11188919165_b73f1ddc32_b.jpg">
            <img src="http://farm4.static.flickr.com/3741/11188919165_b73f1ddc32_s.jpg">
        </a>
        <a data-gallery="" title="Delft Touch in the kitchen" href="http://farm4.static.flickr.com/3812/11188050815_5e8cccf0f6_b.jpg">
            <img src="http://farm4.static.flickr.com/3812/11188050815_5e8cccf0f6_s.jpg">
        </a>
        <a data-gallery="" title="Father Figure Project: The Social Construct" href="http://farm4.static.flickr.com/3703/11191153143_04bbbc8301_b.jpg">
            <img src="http://farm4.static.flickr.com/3703/11191153143_04bbbc8301_s.jpg">
        </a>
        <a data-gallery="" title="Higherbeams." href="http://farm4.static.flickr.com/3821/11190956343_09b8022ea2_b.jpg">
            <img src="http://farm4.static.flickr.com/3821/11190956343_09b8022ea2_s.jpg">
        </a>
        <a data-gallery="" title="Contact" href="http://farm8.static.flickr.com/7325/11186917235_003d9df5d6_b.jpg">
            <img src="http://farm8.static.flickr.com/7325/11186917235_003d9df5d6_s.jpg">
        </a>
        <a data-gallery="" title="The Track" href="http://farm6.static.flickr.com/5501/11186913445_c88dd25c59_b.jpg">
            <img src="http://farm6.static.flickr.com/5501/11186913445_c88dd25c59_s.jpg">
        </a>
        <a data-gallery="" title="TheHallsOfAdoration" href="http://farm4.static.flickr.com/3715/11186895035_8596236621_b.jpg">
            <img src="http://farm4.static.flickr.com/3715/11186895035_8596236621_s.jpg">
        </a>
        <a data-gallery="" title="Si me dijeran pide un deseo" href="http://farm8.static.flickr.com/7414/11190086653_e330723a8c_b.jpg">
            <img src="http://farm8.static.flickr.com/7414/11190086653_e330723a8c_s.jpg">
        </a>
        <a data-gallery="" title="untitled" href="http://farm3.static.flickr.com/2891/11188743634_f339e72b79_b.jpg">
            <img src="http://farm3.static.flickr.com/2891/11188743634_f339e72b79_s.jpg">
        </a>
        <a data-gallery="" title="Loch Ba" href="http://farm8.static.flickr.com/7390/11187408694_9dd7188ca8_b.jpg">
            <img src="http://farm8.static.flickr.com/7390/11187408694_9dd7188ca8_s.jpg">
        </a>
        <a data-gallery="" title="Remarkable Rocks 2" href="http://farm3.static.flickr.com/2831/11187401055_1e498bde13_b.jpg">
            <img src="http://farm3.static.flickr.com/2831/11187401055_1e498bde13_s.jpg">
        </a>
        <a data-gallery="" title="The imagination tree" href="http://farm6.static.flickr.com/5530/11188853224_91ebabac12_b.jpg">
            <img src="http://farm6.static.flickr.com/5530/11188853224_91ebabac12_s.jpg">
        </a>
        <a data-gallery="" title="Blue Patricia Lake" href="http://farm4.static.flickr.com/3720/11190734053_7cf9749bdb_b.jpg">
            <img src="http://farm4.static.flickr.com/3720/11190734053_7cf9749bdb_s.jpg">
        </a>
        <a data-gallery="" title="Goblin Brute" href="http://farm4.static.flickr.com/3740/11186937956_d8d8422169_b.jpg">
            <img src="http://farm4.static.flickr.com/3740/11186937956_d8d8422169_s.jpg">
        </a>
        <a data-gallery="" title="." href="http://farm8.static.flickr.com/7421/11191341825_b2bf635f25_b.jpg">
            <img src="http://farm8.static.flickr.com/7421/11191341825_b2bf635f25_s.jpg">
        </a>
        <a data-gallery="" title="be the light 336.365" href="http://farm3.static.flickr.com/2809/11189301843_9f41b02a47_b.jpg">
            <img src="http://farm3.static.flickr.com/2809/11189301843_9f41b02a47_s.jpg">
        </a>
        <a data-gallery="" title="Lofoten Islands" href="http://farm4.static.flickr.com/3788/11193226453_fd9b06008c_b.jpg">
            <img src="http://farm4.static.flickr.com/3788/11193226453_fd9b06008c_s.jpg">
        </a>
        <a data-gallery="" title="もみじ" href="http://farm4.static.flickr.com/3737/11189043544_e992a227d3_b.jpg">
            <img src="http://farm4.static.flickr.com/3737/11189043544_e992a227d3_s.jpg">
        </a>
        <a data-gallery="" title="Nocturna en Albarracín./ Nocturne near Albarracín (Teruel, Spain)." href="http://farm8.static.flickr.com/7455/11187819606_c008b36106_b.jpg">
            <img src="http://farm8.static.flickr.com/7455/11187819606_c008b36106_s.jpg">
        </a>
        <a data-gallery="" title="DIAMOND IN THE ROUGH" href="http://farm8.static.flickr.com/7319/11188792234_dfea30f688_b.jpg">
            <img src="http://farm8.static.flickr.com/7319/11188792234_dfea30f688_s.jpg">
        </a>
        <a data-gallery="" title="Imperfection" href="http://farm3.static.flickr.com/2817/11188666563_091e4bb4b4_b.jpg">
            <img src="http://farm3.static.flickr.com/2817/11188666563_091e4bb4b4_s.jpg">
        </a>
        <a data-gallery="" title="Late Again" href="http://farm6.static.flickr.com/5531/11186088035_98d5c7be84_b.jpg">
            <img src="http://farm6.static.flickr.com/5531/11186088035_98d5c7be84_s.jpg">
        </a>
        <a data-gallery="" title="Canyons" href="http://farm6.static.flickr.com/5502/11189048145_f234c1c4a1_b.jpg">
            <img src="http://farm6.static.flickr.com/5502/11189048145_f234c1c4a1_s.jpg">
        </a>
        <a data-gallery="" title="Brouillard sur Lanaud" href="http://farm6.static.flickr.com/5477/11193030495_dc7d99caff_b.jpg">
            <img src="http://farm6.static.flickr.com/5477/11193030495_dc7d99caff_s.jpg">
        </a>
        <a data-gallery="" title="Incontri di lavoro" href="http://farm8.static.flickr.com/7333/11189762165_7092588e1f_b.jpg">
            <img src="http://farm8.static.flickr.com/7333/11189762165_7092588e1f_s.jpg">
        </a>
        <a data-gallery="" title="Tijdens de wandeling terug van De panne naar Oostduinkerke" href="http://farm6.static.flickr.com/5542/11186573045_89102139d2_b.jpg">
            <img src="http://farm6.static.flickr.com/5542/11186573045_89102139d2_s.jpg">
        </a>
        <a data-gallery="" title="absorbed" href="http://farm4.static.flickr.com/3751/11194208465_ccfb0df6d3_b.jpg">
            <img src="http://farm4.static.flickr.com/3751/11194208465_ccfb0df6d3_s.jpg">
        </a>
        <a data-gallery="" title="Metal,  Steam and Dedication.  North Yorkshire Moors Railway." href="http://farm6.static.flickr.com/5531/11189794436_99c1e0dcfd_b.jpg">
            <img src="http://farm6.static.flickr.com/5531/11189794436_99c1e0dcfd_s.jpg">
        </a>
        <a data-gallery="" title="Tutorial tuesday" href="http://farm4.static.flickr.com/3767/11194056215_786a05dcb9_b.jpg">
            <img src="http://farm4.static.flickr.com/3767/11194056215_786a05dcb9_s.jpg">
        </a>
        <a data-gallery="" title="My Street." href="http://farm8.static.flickr.com/7375/11187509905_0366640771_b.jpg">
            <img src="http://farm8.static.flickr.com/7375/11187509905_0366640771_s.jpg">
        </a>
        <a data-gallery="" title="Histoire comme ça" href="http://farm3.static.flickr.com/2821/11187333644_25ae318b9a_b.jpg">
            <img src="http://farm3.static.flickr.com/2821/11187333644_25ae318b9a_s.jpg">
        </a>
        <a data-gallery="" title="" href="http://farm4.static.flickr.com/3797/11186343795_9e20e0a0d0_b.jpg">
            <img src="http://farm4.static.flickr.com/3797/11186343795_9e20e0a0d0_s.jpg">
        </a>
        <a data-gallery="" title="Alice" href="http://farm6.static.flickr.com/5501/11190429845_6b3bf13263_b.jpg">
            <img src="http://farm6.static.flickr.com/5501/11190429845_6b3bf13263_s.jpg">
        </a>
        <a data-gallery="" title="Irreversible" href="http://farm8.static.flickr.com/7437/11188139865_91b1fbb522_b.jpg">
            <img src="http://farm8.static.flickr.com/7437/11188139865_91b1fbb522_s.jpg">
        </a>
        <a data-gallery="" title="Kurhaus Binz" href="http://farm8.static.flickr.com/7311/11194373534_956b5e79d9_b.jpg">
            <img src="http://farm8.static.flickr.com/7311/11194373534_956b5e79d9_s.jpg">
        </a>
        <a data-gallery="" title="the lure of the easter lily" href="http://farm8.static.flickr.com/7365/11194393934_297a0bb9e2_b.jpg">
            <img src="http://farm8.static.flickr.com/7365/11194393934_297a0bb9e2_s.jpg">
        </a>
        <a data-gallery="" title="What's Inside My Bag" href="http://farm4.static.flickr.com/3780/11189972615_a62b8c7213_b.jpg">
            <img src="http://farm4.static.flickr.com/3780/11189972615_a62b8c7213_s.jpg">
        </a>
        <a data-gallery="" title="photo boillon christophe / photo macro au carré syrphe & fleur de lys / le souvenir du regard d'un insecte n°2" href="http://farm8.static.flickr.com/7385/11191819703_75990b9d9b_b.jpg">
            <img src="http://farm8.static.flickr.com/7385/11191819703_75990b9d9b_s.jpg">
        </a>
        <a data-gallery="" title="Please Don't Jump!" href="http://farm3.static.flickr.com/2859/11195652165_7a406e0d7c_b.jpg">
            <img src="http://farm3.static.flickr.com/2859/11195652165_7a406e0d7c_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="Pink Orchid.  Orquídea rosa." href="http://farm4.static.flickr.com/3711/11186551613_f3e986c66b_b.jpg">
            <img src="http://farm4.static.flickr.com/3711/11186551613_f3e986c66b_s.jpg">
        </a>
        <a data-gallery="" title="autumn sun rays" href="http://farm6.static.flickr.com/5471/11194154564_088959d971_b.jpg">
            <img src="http://farm6.static.flickr.com/5471/11194154564_088959d971_s.jpg">
        </a>
        <a data-gallery="" title="A Fallen Sky" href="http://farm6.static.flickr.com/5494/11193293955_df6ae68522_b.jpg">
            <img src="http://farm6.static.flickr.com/5494/11193293955_df6ae68522_s.jpg">
        </a>
        <a data-gallery="" title="the drilling has stopped" href="http://farm4.static.flickr.com/3739/11193143803_0d5dd1d935_b.jpg">
            <img src="http://farm4.static.flickr.com/3739/11193143803_0d5dd1d935_s.jpg">
        </a>
        <a data-gallery="" title="Sunset at Cayucos, CA" href="http://farm4.static.flickr.com/3785/11193020376_054ba0c2cb_b.jpg">
            <img src="http://farm4.static.flickr.com/3785/11193020376_054ba0c2cb_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="IMG_1124" href="http://farm4.static.flickr.com/3690/11191491034_3f1af54e5e_b.jpg">
            <img src="http://farm4.static.flickr.com/3690/11191491034_3f1af54e5e_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="Eiffel's Shadow Part 2" href="http://farm8.static.flickr.com/7432/11189047666_2ff11060db_b.jpg">
            <img src="http://farm8.static.flickr.com/7432/11189047666_2ff11060db_s.jpg">
        </a>
        <a data-gallery="" title="Old Time Space Pilots!" href="http://farm6.static.flickr.com/5508/11197130006_ac579704c7_b.jpg">
            <img src="http://farm6.static.flickr.com/5508/11197130006_ac579704c7_s.jpg">
        </a>
        <a data-gallery="" title="Sky reflected" href="http://farm4.static.flickr.com/3811/11191218745_ef8cf811c9_b.jpg">
            <img src="http://farm4.static.flickr.com/3811/11191218745_ef8cf811c9_s.jpg">
        </a>
        <a data-gallery="" title="Rain at sea" href="http://farm6.static.flickr.com/5528/11191191844_7de9305ff0_b.jpg">
            <img src="http://farm6.static.flickr.com/5528/11191191844_7de9305ff0_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="Frostig - Frosty" href="http://farm4.static.flickr.com/3827/11194862425_a1a26fce68_b.jpg">
            <img src="http://farm4.static.flickr.com/3827/11194862425_a1a26fce68_s.jpg">
        </a>
        <a data-gallery="" title="Orange Ladybird" href="http://farm6.static.flickr.com/5527/11186670076_11ee081969_b.jpg">
            <img src="http://farm6.static.flickr.com/5527/11186670076_11ee081969_s.jpg">
        </a>
        <a data-gallery="" title="Pink orchid" href="http://farm6.static.flickr.com/5514/11193598423_981cb3b900_b.jpg">
            <img src="http://farm6.static.flickr.com/5514/11193598423_981cb3b900_s.jpg">
        </a>
        <a data-gallery="" title="225.2013" href="http://farm8.static.flickr.com/7449/11193159913_76ddcd3f02_b.jpg">
            <img src="http://farm8.static.flickr.com/7449/11193159913_76ddcd3f02_s.jpg">
        </a>
        <a data-gallery="" title="DSC_7489" href="http://farm4.static.flickr.com/3834/11187370596_195c175098_b.jpg">
            <img src="http://farm4.static.flickr.com/3834/11187370596_195c175098_s.jpg">
        </a>
        <a data-gallery="" title="G-TCDC 2 A321-231S Thomas Cook Airlines UK(on del) MAN 03DEC13" href="http://farm4.static.flickr.com/3665/11192324763_729bd2eb5a_b.jpg">
            <img src="http://farm4.static.flickr.com/3665/11192324763_729bd2eb5a_s.jpg">
        </a>
        <a data-gallery="" title="cold day..but nice" href="http://farm6.static.flickr.com/5546/11191357813_754fc41bde_b.jpg">
            <img src="http://farm6.static.flickr.com/5546/11191357813_754fc41bde_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="Grinnell in B & W" href="http://farm8.static.flickr.com/7409/11190351243_5c9d34b844_b.jpg">
            <img src="http://farm8.static.flickr.com/7409/11190351243_5c9d34b844_s.jpg">
        </a>
        <a data-gallery="" title="15th corner of metallic shadows" href="http://farm3.static.flickr.com/2824/11192248094_5239c5bb88_b.jpg">
            <img src="http://farm3.static.flickr.com/2824/11192248094_5239c5bb88_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="The Receipt, Tesco Supermarket, Thornton Heath" href="http://farm3.static.flickr.com/2832/11190558394_4198ee9487_b.jpg">
            <img src="http://farm3.static.flickr.com/2832/11190558394_4198ee9487_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="Golmaramara, Manisa" href="http://farm8.static.flickr.com/7378/11190583213_87c55a04b1_b.jpg">
            <img src="http://farm8.static.flickr.com/7378/11190583213_87c55a04b1_s.jpg">
        </a>
        <a data-gallery="" title="IMG_4539 Alstroemeria hibrida( Peruvian lily or lily of the Incas)" href="http://farm3.static.flickr.com/2881/11190387313_07d3e4019e_b.jpg">
            <img src="http://farm3.static.flickr.com/2881/11190387313_07d3e4019e_s.jpg">
        </a>
        <a data-gallery="" title="On the Move" href="http://farm4.static.flickr.com/3710/11190198736_329108ab33_b.jpg">
            <img src="http://farm4.static.flickr.com/3710/11190198736_329108ab33_s.jpg">
        </a>
        <a data-gallery="" title="Twistleton Erratic Mystery Solved" href="http://farm4.static.flickr.com/3736/11188821145_4d7c5cba2d_b.jpg">
            <img src="http://farm4.static.flickr.com/3736/11188821145_4d7c5cba2d_s.jpg">
        </a>
        <a data-gallery="" title="Welcome To Dream Theater" href="http://farm3.static.flickr.com/2888/11194228946_a22ca1273f_b.jpg">
            <img src="http://farm3.static.flickr.com/2888/11194228946_a22ca1273f_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="Kingfisher 115" href="http://farm4.static.flickr.com/3761/11192804084_fc9c224b92_b.jpg">
            <img src="http://farm4.static.flickr.com/3761/11192804084_fc9c224b92_s.jpg">
        </a>
        <a data-gallery="" title="Oh Christmas Tree, Oh Christmas Tree (A7 + FE 28-70mm)" href="http://farm3.static.flickr.com/2843/11188372516_d2b638c316_b.jpg">
            <img src="http://farm3.static.flickr.com/2843/11188372516_d2b638c316_s.jpg">
        </a>
        <a data-gallery="" title="Réservoir" href="http://farm4.static.flickr.com/3772/11186008524_70203c9862_b.jpg">
            <img src="http://farm4.static.flickr.com/3772/11186008524_70203c9862_s.jpg">
        </a>
        <a data-gallery="" title="Anna's Hummingbird" href="http://farm3.static.flickr.com/2879/11193622663_2596f23ccb_b.jpg">
            <img src="http://farm3.static.flickr.com/2879/11193622663_2596f23ccb_s.jpg">
        </a>
        <a data-gallery="" title="India. Udaipur. Templo de Sas Bahu" href="http://farm4.static.flickr.com/3766/11191115443_ef304dab2d_b.jpg">
            <img src="http://farm4.static.flickr.com/3766/11191115443_ef304dab2d_s.jpg">
        </a>
        <a data-gallery="" title="Afternoon Tea Treat" href="http://farm6.static.flickr.com/5546/11186477995_5e02323a9a_b.jpg">
            <img src="http://farm6.static.flickr.com/5546/11186477995_5e02323a9a_s.jpg">
        </a>
        <a data-gallery="" title="0007559" href="http://farm4.static.flickr.com/3715/11192580616_2534046023_b.jpg">
            <img src="http://farm4.static.flickr.com/3715/11192580616_2534046023_s.jpg">
        </a>
        <a data-gallery="" title="Liège-Guillemins" href="http://farm4.static.flickr.com/3813/11191726844_ef38874aa2_b.jpg">
            <img src="http://farm4.static.flickr.com/3813/11191726844_ef38874aa2_s.jpg">
        </a>
        <a data-gallery="" title="autunno in Langa" href="http://farm8.static.flickr.com/7295/11186551094_fd7f6bb741_b.jpg">
            <img src="http://farm8.static.flickr.com/7295/11186551094_fd7f6bb741_s.jpg">
        </a>
        <a data-gallery="" title="Junco" href="http://farm4.static.flickr.com/3775/11188715846_ccaaa3c859_b.jpg">
            <img src="http://farm4.static.flickr.com/3775/11188715846_ccaaa3c859_s.jpg">
        </a>
        <a data-gallery="" title="illuminati" href="http://farm8.static.flickr.com/7390/11190619986_b01b312535_b.jpg">
            <img src="http://farm8.static.flickr.com/7390/11190619986_b01b312535_s.jpg">
        </a>
        <a data-gallery="" title="Chicago on the prairie" href="http://farm8.static.flickr.com/7444/11192183673_9b5dc14b82_b.jpg">
            <img src="http://farm8.static.flickr.com/7444/11192183673_9b5dc14b82_s.jpg">
        </a>
        <a data-gallery="" title="In the wee small hours" href="http://farm4.static.flickr.com/3690/11188858774_880657dfe5_b.jpg">
            <img src="http://farm4.static.flickr.com/3690/11188858774_880657dfe5_s.jpg">
        </a>
        <a data-gallery="" title="Sunset at Rocca Calascio" href="http://farm4.static.flickr.com/3823/11188037413_12432dbd1b_b.jpg">
            <img src="http://farm4.static.flickr.com/3823/11188037413_12432dbd1b_s.jpg">
        </a>
        <a data-gallery="" title="Autumn Woodland Walk" href="http://farm8.static.flickr.com/7445/11193295285_0e9a33b308_b.jpg">
            <img src="http://farm8.static.flickr.com/7445/11193295285_0e9a33b308_s.jpg">
        </a>
        <a data-gallery="" title="The Scoop" href="http://farm4.static.flickr.com/3704/11189390906_9f6d188f6f_b.jpg">
            <img src="http://farm4.static.flickr.com/3704/11189390906_9f6d188f6f_s.jpg">
        </a>
        <a data-gallery="" title="Night Messenger" href="http://farm3.static.flickr.com/2820/11187385286_22a1684442_b.jpg">
            <img src="http://farm3.static.flickr.com/2820/11187385286_22a1684442_s.jpg">
        </a>
        <a data-gallery="" title="IMG_0986 (1)" href="http://farm6.static.flickr.com/5540/11194162765_82ff5370ba_b.jpg">
            <img src="http://farm6.static.flickr.com/5540/11194162765_82ff5370ba_s.jpg">
        </a>
        <a data-gallery="" title="Opening in the reeds" href="http://farm8.static.flickr.com/7297/11194070595_8fbe773d36_b.jpg">
            <img src="http://farm8.static.flickr.com/7297/11194070595_8fbe773d36_s.jpg">
        </a>
        <a data-gallery="" title="坐看 ~奧入瀨溪流,  雲井之流  of Oirase Keiryu~" href="http://farm4.static.flickr.com/3809/11192250074_96d068f6b6_b.jpg">
            <img src="http://farm4.static.flickr.com/3809/11192250074_96d068f6b6_s.jpg">
        </a>
        <a data-gallery="" title="Blue and Gold" href="http://farm4.static.flickr.com/3724/11191614145_eeae8c7a2a_b.jpg">
            <img src="http://farm4.static.flickr.com/3724/11191614145_eeae8c7a2a_s.jpg">
        </a>
        <a data-gallery="" title="NYC in Silhouette" href="http://farm6.static.flickr.com/5509/11188709506_8b49202344_b.jpg">
            <img src="http://farm6.static.flickr.com/5509/11188709506_8b49202344_s.jpg">
        </a>
        <a data-gallery="" title="I hate love" href="http://farm4.static.flickr.com/3684/11187175694_f1e860e03f_b.jpg">
            <img src="http://farm4.static.flickr.com/3684/11187175694_f1e860e03f_s.jpg">
        </a>
        <a data-gallery="" title="Jambatan Seri Warasan #2" href="http://farm8.static.flickr.com/7392/11192683083_c9bcc29620_b.jpg">
            <img src="http://farm8.static.flickr.com/7392/11192683083_c9bcc29620_s.jpg">
        </a>
        <a data-gallery="" title="Flower lakeside" href="http://farm6.static.flickr.com/5517/11188543255_769549853a_b.jpg">
            <img src="http://farm6.static.flickr.com/5517/11188543255_769549853a_s.jpg">
        </a>
        <a data-gallery="" title="Gobi Desert" href="http://farm4.static.flickr.com/3756/11186900993_40b7e05620_b.jpg">
            <img src="http://farm4.static.flickr.com/3756/11186900993_40b7e05620_s.jpg">
        </a>
        <a data-gallery="" title="The Cradle of Light" href="http://farm8.static.flickr.com/7374/11191272254_b768cca1ab_b.jpg">
            <img src="http://farm8.static.flickr.com/7374/11191272254_b768cca1ab_s.jpg">
        </a>
        <a data-gallery="" title="Matched up 337/365" href="http://farm6.static.flickr.com/5519/11190498386_b0e551fcd3_b.jpg">
            <img src="http://farm6.static.flickr.com/5519/11190498386_b0e551fcd3_s.jpg">
        </a>
        <a data-gallery="" title="IMGP9696-stavrosstam" href="http://farm6.static.flickr.com/5483/11192544226_e76f7000ab_b.jpg">
            <img src="http://farm6.static.flickr.com/5483/11192544226_e76f7000ab_s.jpg">
        </a>
        <a data-gallery="" title="IMG_3117" href="http://farm4.static.flickr.com/3758/11191372883_200105f62f_b.jpg">
            <img src="http://farm4.static.flickr.com/3758/11191372883_200105f62f_s.jpg">
        </a>
        <a data-gallery="" title="A world apart..." href="http://farm3.static.flickr.com/2831/11189347715_9d8f5b400b_b.jpg">
            <img src="http://farm3.static.flickr.com/2831/11189347715_9d8f5b400b_s.jpg">
        </a>
        <a data-gallery="" title="Lights on Cape Cod Bay" href="http://farm6.static.flickr.com/5490/11187042085_cd6483e25c_b.jpg">
            <img src="http://farm6.static.flickr.com/5490/11187042085_cd6483e25c_s.jpg">
        </a>
        <a data-gallery="" title="second spring" href="http://farm4.static.flickr.com/3801/11196375183_f6abd5b25e_b.jpg">
            <img src="http://farm4.static.flickr.com/3801/11196375183_f6abd5b25e_s.jpg">
        </a>
        <a data-gallery="" title="Perfect Landing" href="http://farm6.static.flickr.com/5503/11194858816_e46fc17ecd_b.jpg">
            <img src="http://farm6.static.flickr.com/5503/11194858816_e46fc17ecd_s.jpg">
        </a> --}}
        {{-- <a data-gallery="" title="Oh rose thou art sick..." href="http://farm4.static.flickr.com/3806/11189687433_9183bb0d19_b.jpg">
            <img src="http://farm4.static.flickr.com/3806/11189687433_9183bb0d19_s.jpg">
        </a>
        <a data-gallery="" title="" href="http://farm8.static.flickr.com/7448/11188317995_4127b61baa_b.jpg">
            <img src="http://farm8.static.flickr.com/7448/11188317995_4127b61baa_s.jpg">
        </a> --}}
    {{-- </div> --}}
    <br>
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/bootstrap-image-gallery.js"></script>
<script src="https://raw.github.com/blueimp/Bootstrap-Image-Gallery/master/js/demo.js"></script>
 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-----events section----->
<style type="text/css">
	@import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

	.container { margin-top: 20px; }
	.mb20 { margin-bottom: 20px; } 

	hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
	hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
	hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

	.search-result .thumbnail { border-radius: 0 !important; }
	.search-result:first-child { margin-top: 0 !important; }
	.search-result { margin-top: 20px; }
	.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
	.search-result ul { padding-left: 0 !important; list-style: none;  }
	.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
	.search-result ul li i { padding-right: 5px; }
	.search-result .col-md-7 { position: relative; }
	.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
	.search-result h3 > a, .search-result i { color: #248dc1 !important; }
	.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 
	.search-result span.plus { position: absolute; right: 0; top: 126px; }
	.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
	.search-result span.plus a:hover { background-color: #414141; }
	.search-result span.plus a i { color: #fff !important; }
	.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }
</style>

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!----- here goes search results section ---> 
<div class="container">
    <hgroup class="mb20">
        <h1>Our Events</h1>
		<h2 class="lead">here are some listings of <strong class="text-danger">{{auth()->user()->name}}</strong> events</h2>								
	</hgroup>
    
    <section class="col-xs-12 col-sm-6 col-md-12">
        {{-- {{dd($a)}} --}}
        @foreach ($array1 as $item)
		<article class="search-result row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#" title="{{$item->name}}" class=""><img src={{$item->photo}} alt="{{$item->name}}" style="height= 150px"></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
                <ul class="meta-search">
                    <li><i class="glyphicon glyphicon-map-marker danger"></i><strong class="text-danger"> location</strong><span> {{$item->location}} </span></li>
                    <li><i class="glyphicon glyphicon-calendar danger"></i><strong class="text-danger"> From </strong><span>{{$item->from}}</span></li>
                    <li><i class="glyphicon glyphicon-calendar danger"></i><strong class="text-danger"> To </strong><span>{{$item->to}} </span></li>
					<li><i class="glyphicon glyphicon-calendar danger"></i><strong class="text-danger"> Deadline </strong><span>{{$item->deadline_date}} </span></li>
                    <li><i class="glyphicon glyphicon-user danger"></i><strong class="text-danger"> maximum travellers</strong><span> {{$item->max_bookings}} </span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
            <h3><a href="#" title="{{$item->name}}">{{$item->name}}</a></h3>
                <p>{{$item->description}}</p>	
                <br> 					
				<p>{{$item->facility}}</p>						
                <span class="plus"><a href="#" title="edit" ><i class="glyphicon glyphicon-pencil"></i></a></span>
                <span class="trash"><a href="#" title="delete"><i class="glyphicon glyphicon-trash"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>
        
        @endforeach
        {{-- <article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/food" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>02/13/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>8:32 pm</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Food</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/sports" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>01/11/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>10:13 am</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Sport</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>			 --}}

		{{-- <br><button style="float: right;" class="btn btn-primary btn-md">Show All</button> --}}

	</section>
</div>

<br>



<!------ratings section ---->
<style>

.btn-grey{
    background-color:#D8D8D8;
	color:#FFF;
}
.rating-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px 15px 20px 15px;
	border-radius:3px;
}
.bold{
	font-weight:700;
}
.padding-bottom-7{
	padding-bottom:7px;
}

.review-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px;
	border-radius:3px;
	margin-bottom:15px;
}
.review-block-name{
	font-size:12px;
	margin:10px 0;
}
.review-block-date{
	font-size:12px;
}
.review-block-rate{
	font-size:13px;
	margin-bottom:15px;
}
.review-block-title{
	font-size:15px;
	font-weight:700;
	margin-bottom:10px;
}
.review-block-description{
	font-size:13px;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="rating-block">
					<h4>Average user rating</h4>
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<div class="col-sm-3">
				<h4>Rating breakdown</h4>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">1</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">1</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
			</div>			
		</div>			
		<div class="row">
            <div class="col-sm-7">
                <hr/>
				<div class="review-block">
                    {{-- @foreach ($array2 as $item)	 --}}
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
                    {{-- @endforeach	 --}}
					{{-- <hr/>
                        n glyphicon-star" aria-hidden="true"></span>
                    </button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> --}}
								{{-- </button><div class="row">
						<div class="col-sm-3">
							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-sm-3">
							<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
							<div class="review-block-name"><a href="#">nktailor</a></div>
							<div class="review-block-date">January 29, 2016<br/>1 day ago</div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
								  <span class="glyphico
							</div>
							<div class="review-block-title">this was nice in buy</div>
							<div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		
    </div> <!-- /container -->


    <!---- write review section --->

    {{-- 
    <style type="text/css">
        body {padding-top:20px;}

    .glyphicon-lg{font-size:3em}
    .blockquote-box{border-right:5px solid #E6E6E6;margin-bottom:25px}
    .blockquote-box .square{width:100px;min-height:50px;margin-right:22px;text-align:center!important;background-color:#E6E6E6;padding:20px 0}
    .blockquote-box.blockquote-primary{border-color:#357EBD}
    .blockquote-box.blockquote-primary .square{background-color:#428BCA;color:#FFF}
    .blockquote-box.blockquote-success{border-color:#4CAE4C}
    .blockquote-box.blockquote-success .square{background-color:#5CB85C;color:#FFF}
    .blockquote-box.blockquote-info{border-color:#46B8DA}
    .blockquote-box.blockquote-info .square{background-color:#5BC0DE;color:#FFF}
    .blockquote-box.blockquote-warning{border-color:#EEA236}
    .blockquote-box.blockquote-warning .square{background-color:#F0AD4E;color:#FFF}
    .blockquote-box.blockquote-danger{border-color:#D43F3A}
    .blockquote-box.blockquote-danger .square{background-color:#D9534F;color:#FFF}

    /*!
    * @copyright © Kartik Visweswaran, Krajee.com, 2014
    * @version 2.5.0
    *
    * A simple yet powerful JQuery star rating plugin that allows rendering
    * fractional star ratings and supports Right to Left (RTL) input.
    *
    * For more JQuery/Bootstrap plugins and demos visit http://plugins.krajee.com
    * For more Yii related demos visit http://demos.krajee.com
    */
    .rating-loading {
        width: 25px;
        height: 25px;
        font-size: 0px;
        color: #fff;
        background: transparent url('../img/loading.gif') top left no-repeat;
        border: none;
    }
    /*
    * Stars
    */
    .rating-gly {
        font-family: 'Glyphicons Halflings';
    }
    .rating-gly-star {
        font-family: 'Glyphicons Halflings';
        padding-left: 2px;
    }

    .rating-gly-star .rating-stars:before {
        padding-left: 2px;
    }

    .rating-lg .rating-gly-star, .rating-lg .rating-gly-star .rating-stars:before {
        padding-left: 4px;
    }

    .rating-xl .rating-gly-star, .rating-xl .rating-gly-star .rating-stars:before {
        padding-left: 2px;
    }

    .rating-active {
        cursor: default;
    }

    .rating-disabled {
        cursor: not-allowed;
    }

    .rating-uni {
        font-size: 1.2em;
        margin-top: -5px;
    }

    .rating-container {
        position: relative;
        vertical-align: middle;
        display: inline-block;
        color: #e3e3e3;
        overflow: hidden;
    }

    .rating-container:before {
        content: attr(data-content);
    }

    .rating-container .rating-stars {
        position: absolute;
        left: 0;
        top: 0;
        white-space: nowrap;
        overflow: hidden;
        color: #fde16d;
        transition: all 0.25s ease-out;
        -o-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        -webkit-transition: all 0.25s ease-out;
    }

    .rating-container .rating-stars:before {
        content: attr(data-content);
        text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
    }

    .rating-container-rtl {
        position: relative;
        vertical-align: middle;
        display: inline-block;
        overflow: hidden;
        color: #fde16d;
    }

    .rating-container-rtl:before {
        content: attr(data-content);
        text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
    }

    .rating-container-rtl .rating-stars {
        position: absolute;
        left: 0;
        top: 0;
        white-space: nowrap;
        overflow: hidden;
        color: #e3e3e3;
        transition: all 0.25s ease-out;
        -o-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        -webkit-transition: all 0.25s ease-out;
    }

    .rating-container-rtl .rating-stars:before {
        content: attr(data-content);
    }

    /**
    * Rating sizes
    */
    .rating-xl {
        font-size: 4.89em;
    }

    .rating-lg {
        font-size: 3.91em;
    }

    .rating-md {
        font-size: 3.13em;
    }

    .rating-sm {
        font-size: 2.5em;
    }

    .rating-xs {
        font-size: 2em;
    }

    /**
    * Clear rating button
    */
    .star-rating .clear-rating, .star-rating-rtl .clear-rating {
        color: #aaa;
        cursor: not-allowed;
        display: inline-block;
        vertical-align: middle;
        font-size: 60%;
    }

    .clear-rating-active {
        cursor: pointer !important;
    }

    .clear-rating-active:hover {
        color: #843534;
    }

    .star-rating .clear-rating {
        padding-right: 5px;
    }

    /**
    * Caption
    */
    .star-rating .caption, .star-rating-rtl .caption {
        color: #999;
        display: inline-block;
        vertical-align: middle;
        font-size: 55%;
    }

    .star-rating .caption {
        padding-left: 5px;
    }

    .star-rating-rtl .caption {
        padding-right: 5px;
    }
    </style>

    <script type="text/javascript">
        /*!
    * @copyright © Kartik Visweswaran, Krajee.com, 2014
    * @version 2.5.0
    *
    * A simple yet powerful JQuery star rating plugin that allows rendering
    * fractional star ratings and supports Right to Left (RTL) input.
    * 
    * For more JQuery plugins visit http://plugins.krajee.com
    * For more Yii related demos visit http://demos.krajee.com
    */
    (function ($) {
        var DEFAULT_MIN = 0;
        var DEFAULT_MAX = 5;
        var DEFAULT_STEP = 0.5;

        var isEmpty = function (value, trim) {
            return typeof value === 'undefined' || value === null || value === undefined || value == []
                || value === '' || trim && $.trim(value) === '';
        };

        var validateAttr = function ($input, vattr, options) {
            var chk = isEmpty($input.data(vattr)) ? $input.attr(vattr) : $input.data(vattr);
            if (chk) {
                return chk;
            }
            return options[vattr];
        };

        var getDecimalPlaces = function (num) {
            var match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            if (!match) {
                return 0;
            }
            return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
        };

        var applyPrecision = function (val, precision) {
            return parseFloat(val.toFixed(precision));
        };

        // Rating public class definition
        var Rating = function (element, options) {
            this.$element = $(element);
            this.init(options);
        };

        Rating.prototype = {
            constructor: Rating,
            _parseAttr: function (vattr, options) {
                var self = this, $input = self.$element;
                if ($input.attr('type') === 'range' || $input.attr('type') === 'number') {
                    var val = validateAttr($input, vattr, options);
                    var chk = DEFAULT_STEP;
                    if (vattr === 'min') {
                        chk = DEFAULT_MIN;
                    }
                    else if (vattr === 'max') {
                        chk = DEFAULT_MAX;
                    }
                    else if (vattr === 'step') {
                        chk = DEFAULT_STEP;
                    }
                    var final = isEmpty(val) ? chk : val;
                    return parseFloat(final);
                }
                return parseFloat(options[vattr]);
            },
            /**
            * Listens to events
            */
            listen: function () {
                var self = this;
                self.$rating.on("click", function (e) {
                    if (!self.inactive) {
                        w = e.pageX - self.$rating.offset().left;
                        self.setStars(w);
                        self.$element.trigger('change');
                        self.$element.trigger('rating.change', [self.$element.val(), self.$caption.html()]);
                    }
                });
                self.$clear.on("click", function (e) {
                    if (!self.inactive) {
                        self.clear();
                    }
                });
                $(self.$element[0].form).on("reset", function (e) {
                    if (!self.inactive) {
                        self.reset();
                    }
                });
            },
            initSlider: function (options) {
                var self = this;
                if (isEmpty(self.$element.val())) {
                    self.$element.val(0);
                }
                self.initialValue = self.$element.val();
                self.min = (typeof options.min !== 'undefined') ? options.min : self._parseAttr('min', options);
                self.max = (typeof options.max !== 'undefined') ? options.max : self._parseAttr('max', options);
                self.step = (typeof options.step !== 'undefined') ? options.step : self._parseAttr('step', options);
                if (isNaN(self.min) || isEmpty(self.min)) {
                    self.min = DEFAULT_MIN;
                }
                if (isNaN(self.max) || isEmpty(self.max)) {
                    self.max = DEFAULT_MAX;
                }
                if (isNaN(self.step) || isEmpty(self.step) || self.step == 0) {
                    self.step = DEFAULT_STEP;
                }
                self.diff = self.max - self.min;
            },
            /**
            * Initializes the plugin
            */
            init: function (options) {
                var self = this;
                self.options = options;
                self.initSlider(options);
                self.checkDisabled();
                $element = self.$element;
                self.containerClass = options.containerClass;
                self.glyphicon = options.glyphicon;
                var defaultStar = (self.glyphicon) ? '\ue006' : '\u2605';
                self.symbol = isEmpty(options.symbol) ? defaultStar : options.symbol;
                self.rtl = options.rtl || self.$element.attr('dir');
                if (self.rtl) {
                    self.$element.attr('dir', 'rtl');
                }
                self.showClear = options.showClear;
                self.showCaption = options.showCaption;
                self.size = options.size;
                self.stars = options.stars;
                self.defaultCaption = options.defaultCaption;
                self.starCaptions = options.starCaptions;
                self.starCaptionClasses = options.starCaptionClasses;
                self.clearButton = options.clearButton;
                self.clearButtonTitle = options.clearButtonTitle;
                self.clearButtonBaseClass = !isEmpty(options.clearButtonBaseClass) ? options.clearButtonBaseClass : 'clear-rating';
                self.clearButtonActiveClass = !isEmpty(options.clearButtonActiveClass) ? options.clearButtonActiveClass : 'clear-rating-active';
                self.clearCaption = options.clearCaption;
                self.clearCaptionClass = options.clearCaptionClass;
                self.clearValue = options.clearValue;
                self.$element.removeClass('form-control').addClass('form-control');
                self.$clearElement = isEmpty(options.clearElement) ? null : $(options.clearElement);
                self.$captionElement = isEmpty(options.captionElement) ? null : $(options.captionElement);
                if (typeof self.$rating == 'undefined' && typeof self.$container == 'undefined') {
                    self.$rating = $(document.createElement("div")).html('<div class="rating-stars"></div>');
                    self.$container = $(document.createElement("div"));
                    self.$container.before(self.$rating);
                    self.$container.append(self.$rating);
                    self.$element.before(self.$container).appendTo(self.$rating);
                }
                self.$stars = self.$rating.find('.rating-stars');
                self.generateRating();
                self.$clear = !isEmpty(self.$clearElement) ? self.$clearElement : self.$container.find('.' + self.clearButtonBaseClass);
                self.$caption = !isEmpty(self.$captionElement) ? self.$captionElement : self.$container.find(".caption");
                self.setStars();
                self.$element.hide();
                self.listen();
                if (self.showClear) {
                    self.$clear.attr({"class": self.getClearClass()});
                }
                self.$element.removeClass('rating-loading');
            },
            checkDisabled: function () {
                var self = this;
                self.disabled = validateAttr(self.$element, 'disabled', self.options);
                self.readonly = validateAttr(self.$element, 'readonly', self.options);
                self.inactive = (self.disabled || self.readonly);
            },
            getClearClass: function () {
                return this.clearButtonBaseClass + ' ' + ((this.inactive) ? '' : this.clearButtonActiveClass);
            },
            generateRating: function () {
                var self = this, clear = self.renderClear(), caption = self.renderCaption(),
                    css = (self.rtl) ? 'rating-container-rtl' : 'rating-container',
                    stars = self.getStars();
                css += (self.glyphicon) ? ((self.symbol == '\ue006') ? ' rating-gly-star' : ' rating-gly') : ' rating-uni';
                self.$rating.attr('class', css);
                self.$rating.attr('data-content', stars);
                self.$stars.attr('data-content', stars);
                var css = self.rtl ? 'star-rating-rtl' : 'star-rating';
                self.$container.attr('class', css + ' rating-' + self.size);

                if (self.inactive) {
                    self.$container.removeClass('rating-active').addClass('rating-disabled');
                }
                else {
                    self.$container.removeClass('rating-disabled').addClass('rating-active');
                }

                if (typeof self.$caption == 'undefined' && typeof self.$clear == 'undefined') {
                    if (self.rtl) {
                        self.$container.prepend(caption).append(clear);
                    }
                    else {
                        self.$container.prepend(clear).append(caption);
                    }
                }
                if (!isEmpty(self.containerClass)) {
                    self.$container.removeClass(self.containerClass).addClass(self.containerClass);
                }
            },
            getStars: function () {
                var self = this, numStars = self.stars, stars = '';
                for (var i = 1; i <= numStars; i++) {
                    stars += self.symbol;
                }
                return stars;
            },
            renderClear: function () {
                var self = this;
                if (!self.showClear) {
                    return '';
                }
                var css = self.getClearClass();
                if (!isEmpty(self.$clearElement)) {
                    self.$clearElement.removeClass(css).addClass(css).attr({"title": self.clearButtonTitle});
                    self.$clearElement.html(self.clearButton);
                    return '';
                }
                return '<div class="' + css + '" title="' + self.clearButtonTitle + '">' + self.clearButton + '</div>';
            },
            renderCaption: function () {
                var self = this, val = self.$element.val();
                if (!self.showCaption) {
                    return '';
                }
                var html = self.fetchCaption(val);
                if (!isEmpty(self.$captionElement)) {
                    self.$captionElement.removeClass('caption').addClass('caption').attr({"title": self.clearCaption});
                    self.$captionElement.html(html);
                    return '';
                }
                return '<div class="caption">' + html + '</div>';
            },
            fetchCaption: function (rating) {
                var self = this;
                var val = parseFloat(rating), css, cap;
                if (typeof(self.starCaptionClasses) == "function") {
                    css = isEmpty(self.starCaptionClasses(val)) ? self.clearCaptionClass : self.starCaptionClasses(val);
                } else {
                    css = isEmpty(self.starCaptionClasses[val]) ? self.clearCaptionClass : self.starCaptionClasses[val];
                }
                if (typeof(self.starCaptions) == "function") {
                    var cap = isEmpty(self.starCaptions(val)) ? self.defaultCaption.replace(/\{rating\}/g, val) : self.starCaptions(val);
                } else {
                    var cap = isEmpty(self.starCaptions[val]) ? self.defaultCaption.replace(/\{rating\}/g, val) : self.starCaptions[val];
                }
                var caption = (val == self.clearValue) ? self.clearCaption : cap;
                return '<span class="' + css + '">' + caption + '</span>';
            },
            getValueFromPosition: function (pos) {
                var self = this, precision = getDecimalPlaces(self.step),
                    percentage, val, maxWidth = self.$rating.width();
                percentage = (pos / maxWidth);
                if (self.rtl) {
                    val = (self.min + Math.floor(self.diff * percentage / self.step) * self.step);
                }
                else {
                    val = (self.min + Math.ceil(self.diff * percentage / self.step) * self.step);
                }
                if (val < self.min) {
                    val = self.min;
                }
                else if (val > self.max) {
                    val = self.max;
                }
                val = applyPrecision(parseFloat(val), precision);
                if (self.rtl) {
                    val = self.max - val;
                }
                return val;
            },
            setStars: function (pos) {
                var self = this, min = self.min, max = self.max, step = self.step,
                    val = arguments.length ? self.getValueFromPosition(pos) : (isEmpty(self.$element.val()) ? 0 : self.$element.val()),
                    width = 0, maxWidth = self.$rating.width(), caption = self.fetchCaption(val);
                width = (val - min) / max * 100;
                if (self.rtl) {
                    width = 100 - width;
                }
                self.$element.val(val);
                width += '%';
                self.$stars.css('width', width);
                self.$caption.html(caption);
            },
            clear: function () {
                var self = this;
                var title = '<span class="' + self.clearCaptionClass + '">' + self.clearCaption + '</span>';
                self.$stars.removeClass('rated');
                if (!self.inactive) {
                    self.$caption.html(title);
                }
                self.$element.val(self.clearValue);
                self.setStars();
                self.$element.trigger('rating.clear');
            },
            reset: function () {
                var self = this;
                self.$element.val(self.initialValue);
                self.setStars();
                self.$element.trigger('rating.reset');
            },
            update: function (val) {
                if (arguments.length > 0) {
                    var self = this;
                    self.$element.val(val);
                    self.setStars();
                }
            },
            refresh: function (options) {
                var self = this;
                if (arguments.length) {
                    var cap = '';
                    self.init($.extend(self.options, options));
                    if (self.showClear) {
                        self.$clear.show();
                    }
                    else {
                        self.$clear.hide();
                    }
                    if (self.showCaption) {
                        self.$caption.show();
                    }
                    else {
                        self.$caption.hide();
                    }
                }
            }
        };

        //Star rating plugin definition
        $.fn.rating = function (option) {
            var args = Array.apply(null, arguments);
            args.shift();
            return this.each(function () {
                var $this = $(this),
                    data = $this.data('rating'),
                    options = typeof option === 'object' && option;

                if (!data) {
                    $this.data('rating', (data = new Rating(this, $.extend({}, $.fn.rating.defaults, options, $(this).data()))));
                }

                if (typeof option === 'string') {
                    data[option].apply(data, args);
                }
            });
        };

        $.fn.rating.defaults = {
            stars: 5,
            glyphicon: true,
            symbol: null,
            disabled: false,
            readonly: false,
            rtl: false,
            size: 'md',
            showClear: true,
            showCaption: true,
            defaultCaption: '{rating} Stars',
            starCaptions: {
                0.5: 'Half Star',
                1: 'One Star',
                1.5: 'One & Half Star',
                2: 'Two Stars',
                2.5: 'Two & Half Stars',
                3: 'Three Stars',
                3.5: 'Three & Half Stars',
                4: 'Four Stars',
                4.5: 'Four & Half Stars',
                5: 'Five Stars'
            },
            starCaptionClasses: {
                0.5: 'label label-danger',
                1: 'label label-danger',
                1.5: 'label label-warning',
                2: 'label label-warning',
                2.5: 'label label-info',
                3: 'label label-info',
                3.5: 'label label-primary',
                4: 'label label-primary',
                4.5: 'label label-success',
                5: 'label label-success'
            },
            clearButton: '<i class="glyphicon glyphicon-minus-sign"></i>',
            clearButtonTitle: 'Clear',
            clearButtonBaseClass: 'clear-rating',
            clearButtonActiveClass: 'clear-rating-active',
            clearCaption: 'Not Rated',
            clearCaptionClass: 'label label-default',
            clearValue: 0,
            captionElement: null,
            clearElement: null,
            containerClass: null
        };


        /**
        * Convert automatically number inputs with class 'rating'
        * into the star rating control.
        */
        $('input.rating').addClass('rating-loading');

        $(document).ready(function () {
            var $input = $('input.rating'), count = Object.keys($input).length;
            if (count > 0) {
                $input.rating();
            }
        });
    }(jQuery));
    </script>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row">
        <h2>Feedback</h2>
        <table width="100%" border="0">
        <div class="col-md-9 col-md-offset-0">
            <tr><td width="77%">
            <div class="">
            <form class="form-horizontal" action="send.php" method="post">
            <fieldset>
        
                <!-- Name input-->
                <div class="form-group">
                <label class="col-md-3 control-label" for="name">Full Name</label>
                <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                </div>
                </div>
        
                <!-- Email input-->
                <div class="form-group">
                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                <div class="col-md-9">
                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                </div>
                </div>
        
                <!-- Message body -->
                <div class="form-group">
                <label class="col-md-3 control-label" for="message">Your message</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>
                </div>
                </div>


                <!-- Rating -->
                <div class="form-group">
                <label class="col-md-3 control-label" for="message">Your rating</label>
                <div class="col-md-9">
                    <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                </div>
                </div>
        </td>
        <td align="center" valign="top" width="23%">
                <!-- Form actions -->
                <div class="form-group">
                <div class="col-md-12 text-center">
                    
                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    <button type="reset" class="btn btn-default btn-md">Clear</button>
                </div>
                </div>
            </fieldset>
            </form>
            </div>
        </div>
        </td>
        </tr>
        </table>
    </div> --}}




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

          
          


@endsection