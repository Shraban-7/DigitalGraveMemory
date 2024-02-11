@extends("layout.layout2")
@section("content")
@php
    $ip = $_SERVER['REMOTE_ADDR'];
    if( App\Models\QrScannerIp::where(['ip'=>$ip])->count() >0){
        App\Models\QrScannerIp::where(['ip'=>$ip])->update([
            'date'=>date("Y-m-d"),
        ]);
    }else {
        App\Models\QrScannerIp::insert([
            'date'=>date("Y-m-d"),
            'ip'=>$ip,
        ]);
    }
    $ip_id =  App\Models\QrScannerIp::where(['ip'=>$ip])->first() ;
    
    if(App\Models\QrScannerHistory::where(['scanned'=>$qr_data->id])->count() <= 0){
       App\Models\QrScannerHistory::where(['scanned'=>$qr_data->id])->insert([
        'scanned'=>$qr_data->id,
        'scanner'=>$ip_id->id.','
        ]);
    }else {
      if(App\Models\QrScannerHistory::where(['scanned'=>$qr_data->id])->where('scanner', 'like', "%$ip_id->id,%")->count() <= 0){
       $all_ip_id =  App\Models\QrScannerHistory::where(['scanned'=>$qr_data->id])->first();
        App\Models\QrScannerHistory::where(['scanned'=>$qr_data->id])->update([
        'scanner'=> $all_ip_id->scanner. $ip_id->id.","
        ]);
       }
       
        
    }

@endphp

<header>
   
    <div style="box-shadow: 0px 3px 15px -13px;" class="d-flex align align-items-center">
         <img src="{{asset("assets/cdn/shop/files/Asset_2adobe_200x.png")}}" style="object-fit: contain;
         vertical-align: middle;width:70%" alt=""> 
        <span onclick="handle_dua()" style="padding: 1rem 1rem;font-size: 1.5rem;cursor: pointer;display: flex;justify-content: center;align-items: center;gap: 0.5rem;"><i class="	fas fa-angle-down"></i>
        <div style="font-size: 11px;font-weight: bold;">
        @if( $religion == 1)
        Dua
        
        @elseif( $religion == 2)
        Prayers
        @elseif( $religion == 3)
        Prayers
        @elseif( $religion == 4)
        Heart Sutra
        @endif
    </div>
    </span></div>
</header>

<div id="dua_container" style="position: absolute;top: -65rem;height: 51rem;background: white;z-index: 11;padding: 2rem;max-width:401px; width: 100%;transition: 1s;">
    @if( $religion == 1)
  <div>

<div>
   
    <h6>Dua for Forgiveness:</h6>  
    <p>Arabic: اللهم اغفر له (Allahumma ighfir lahu)</p>  
    <p>Translation: "O Allah, forgive him/her."</p>
</div>
<hr>

<div>
    <h6>Dua for Mercy:</h6>  
    <p>Arabic: اللهم أرحمه (Allahumma arhamhu)</p>  
    <p>Translation: "O Allah, have mercy on him/her."</p>  
</div>
<hr>

<div>
<h6>Dua for Peace:</h6>
<p>Arabic: اللهم اسكنه الجنة (Allahumma isqinhu al-jannah)</p>
<p>Translation: "O Allah, admit him/her to Paradise."</p>
</div>
<hr>
<div>
<h6>Dua for Protection from Punishment:</h6>
<p>Arabic: اللهم لا تؤاخذه بعذاب القبر (Allahumma la tu'adhibhu bi 'adhab al-qabr)</p>
<p>Translation: "O Allah, do not punish him/her with the punishment of the grave."</p>
</div>
<hr>
  </div>
  @elseif( $religion == 2)

  <div>
    <div>
        {{-- <h5>Prayers: </h5> --}}
        <h6>Prayer for Comfort: </h6>
        <p>"Lord, in this time of sorrow, we turn to You for comfort. Be with us as we remember  and grant us the peace that surpasses all understanding."</p>
    </div>
    <hr>

    <div>
        <h6>Prayer of Commendation:</h6>
        <p>"Into your hands, O Lord, we commend the soul of your servant . Acknowledge, we humbly beseech you, a sheep of your fold, a lamb of your own flock."</p>
    </div>
    <hr>
    <div>
        <h6>Prayer for Resurrection Hope:</h6>
        <p>"Lord Jesus, you conquered death and opened the gates of eternal life. We trust in your promise of resurrection and pray for the day when we will be reunited with [name]."</p>
    </div>
<hr>
    <div>
        <h6>Thanksgiving for the Life of the Departed:</h6>
        <p>"Heavenly Father, we thank you for the life of [name]. May their memory be a blessing to us, and may we live in the hope of the life to come."</p>
    </div>
    <hr>
    <div>
        <h6>Prayer for the Bereaved:</h6>
        <p>"God of all comfort, be near to those who mourn. Surround them with your love and grant them strength as they face the loss of [name]."</p>
    </div>
  </div>
  <hr>
  @elseif( $religion == 3)
<div>
  <div>
    {{-- <h5>Prayers:</h5> --}}
    <h6>Kaddish (Mourner's Kaddish):</h6>
    <h6>Transliteration:</h6>
    <p>Yitgadal v'yitkadash sh'mei raba, b'alma di-v'ra chirutei, v'yamlich malchutei b'chayeichon uv'yomeichon uv'chayei d'chol beit Yisrael, ba-agala uvizman kariv, v'imru: Amen."</p>
  pTranslation:
  "Exalted and sanctified be His great name in the world which He created according to His will. May He establish His kingdom during your lifetime during your days, and during the lifetimes of all the House of Israel, speedily and shortly. And say: Amen."
</div>
<hr>
<div>
    <h6>El Maleh Rachamim:</h6>
    <h6>Transliteration:</h6>

    <p>"El maleh rachamim shochen ba-m'romim, hamtzeh menuchah nechonah al kanfei ha-shechinah bema'alot kedoshim u-tehorim kezohar ha-rakia meirim u-mazhirim et nishmot [Name] she-halchah l'olamo, ba-avur she-ani bado yishkon u-ve-shalom al mishkavam ve-no-mar: Amen."</p>
    <h6>Translation:</h6>
    <p> "God, full of mercy, who dwells on high, grant proper rest on the wings of the Divine Presence in the heights of the holy and the pure, like the radiance of the skies, to the soul of [Name] who has gone to his/her eternal rest. Because God is his/her refuge, and we say: Amen."
        </p>

</div>
<hr>
@elseif( $religion == 4)
<div>
    {{-- <h5>Heart Sutra</h5> --}}
    <h6>Sanskrit:</h6>
    <p>न रूपं न चाक्षुषा न रस्त्रो न च घ्राणम्
        न वाग्घ्रो न च चाक्षुषी न व्योमा न वायुः।
        आत्मा न प्राण न चाप्यत्यन्तरयामि
        धर्मः न चात्यन्तरयामीचाधर्मो न चात्यन्तरयामि।</p>
        <hr>
        <h6>Transliteration:</h6>
        <p>na rūpaṁ na cākṣuṣā na rastro na ca ghrāṇam
            na vāgghro na ca cākṣuṣī na vyomā na vāyuḥ
            ātmā na prāṇa na cāpyantaryāmī
            dharmaḥ na cātyantaryāmī cādharmo na cātyantaryāmī</p>
            <hr>
            <p>English Translation:</p>
            <p>"No form, no eye, no ear, no nose,
                no tongue, no body, no mind;
                No form, no sound, no smell, no taste,
                no touch, no object of mind;
                No realm of sight, no realm of consciousness;
                No ignorance, no end of ignorance;
                No old age and death, no end of old age and death;
                No suffering, no cause of suffering, no end of suffering, no path;
                No wisdom and no attainment."
                </p>
</div>
</div>
@endif
</div>
<br>
<div style="width: 200px;height:200px;margin: 0 auto;" >
    <img style="border-radius: 50%" src="{{App\Http\Controllers\Controller::$img_url."/uploads/".$qr_data->profile_img}}" alt="">
</div>
<br>
<div>
    <h3>{{$qr_data->full_name}}</h3>
    <h5 class="text-muted">Life time </h5>
    <h4>{{$qr_data->birth_day}}  - {{$qr_data->death_day}}</h4>
    <h6>{{$qr_data->slug}}</h6>
</div>
<br>
<div class="d-flex justify-content-around">
    <div class="btn  " style="background: #A9B388;width: 5.4rem;height: 4rem">
        <i class="fa fa-share" aria-hidden="true"></i>
      <p>Share</p>
    </div>

    <div class="btn " style="background: #B99470;width: 5.4rem;height: 4rem">
        <i class="fas fa-vector-square    "></i>
        <p>Favorite</p> 
    </div>

    <div class="btn " style="background: #FEFAE0;width: 5.4rem;height: 4rem">
        <i class="fa fa-map" aria-hidden="true"></i>
        <p>Map </p> 
    </div>

    
</div>

<br>
<div>
    <div class="d-flex justify-content-around">
        <div class="select_option bio _active">  Dairy  </div>
        <div class="select_option photos">  Photos </div>
        <div class="select_option videos">  Videos   </div>
        <div class="select_option tributes">  Moments  </div>
        <div class="select_option details"> Details </div>
    </div>
    <hr style="margin: -2px 0;">
    <br>
    <div id="content_container">
    <div class="d-" id="bio_container">
        <div>
            {!! $qr_data->bio !!}
            
        </div>
    </div>
    @if( $qr_data->paid_status == 'fr_to_1_7$' || $qr_data->paid_status == 'pr_a_s_p_1_7$'  || $qr_data->paid_status == 'fa_pa_ac_10_55$' )
    <div class="d-none" id="photos_container">
        @foreach ($qr_photos_link as $qr_photos )
        <div class="img_component">
            <img src="{{App\Http\Controllers\Controller::$img_url."/uploads/".$qr_photos->photo}}" alt="">
             <h5  class="p-4 text-muted" style="font-weight: bold">{{$qr_photos->title}}</h5>  
        </div>
        @endforeach

    </div>
    <div class="d-none" id="videos_container">
        <div class="card">
            <div class="card-body">
                <iframe style="width:100%;height:340px" src="{{$qr_data->youtube_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <br>
                <h4>{{$qr_data->video_title}}</h4>
                {{-- <h6>{{$qr_data->video_description}}</h6> --}}
            </div>
        </div>
    </div>

    <div class="d-none" id="tributes_container">
        <div class="d-flex justify-content-center">
            <button data-bs-toggle="modal" data-bs-target="#tribute_modal" class="btn btn-sm font-weight-bold" style="background: #A9B388"><i class="fa fa-plus" aria-hidden="true"></i> add more moments</button>
            
        </div>
        <br>
           
        <div>
            @foreach ($tributes_link as $tribute)
            {!! $tribute->tributes_link !!}
            <hr>
                
            @endforeach
        </div>
    </div>

    <div class="d-none" id="details_container">
        <div>
            <h4 class="text-muted" style="font-size: 17px;font-weight: bold;">Cemetery Information</h4>
        <br>
        <h5 style="font-size: 17px;font-weight: bold;"><b class="text-muted">Cemetery Name </b> : {{$qr_data->cemetery_name}} </h5>
        <h5 style="font-size: 17px;font-weight: bold;"><b class="text-muted">Cemetery plot number</b> :  {{$qr_data->cemetery_plot_number}}</h5>
        <h5 style="font-size: 17px;font-weight: bold;"><b class="text-muted">Cemetery Location </b> : {{$qr_data->cemetery_plot_location}} </h5>
        </div>
    </div>
    @endif
</div>
</div>

<script>
    function handle_dua(){
        console.log("HI")
        
        // document.getElementById("dua_container").style.top="55rem";
        // console.log(document.getElementById("dua_container").style.top=="55rem")
        if(document.getElementById("dua_container").style.top=="5rem"){
             document.getElementById("dua_container").style.top="-65rem";
        }else{
            document.getElementById("dua_container").style.top="5rem";
        }

        // top: 5rem 

    }
    // function handle_qr_content(){}
    // for (const ele  of  document.getElementsByClassName("select_option")){
    //     ele.addEventListener("click",function(){
    //         console.log(this.className)
    //     })
    // }
    const elements = document.querySelectorAll('.select_option');
    const content_container = document.getElementById("content_container")
    elements.forEach( (ele,i )=> {
    ele.addEventListener("click",function(){
        elements.forEach( ele=>ele.classList.remove("_active"))
        this.classList.add("_active")
    for (const elem of content_container.children){elem.classList.add("d-none")}
    document.getElementById(`${this.className.split(" ")[1]}_container`).classList.remove("d-none")
   
})
    });
</script>

  <!-- Modal -->
  <div class="modal fade" id="tribute_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{URL::to("add_pub_moments")}}">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add more moments </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <textarea name="tributes_link" class="form-control" placeholder="You can share your best moments with him in this box" rows="7"  ></textarea>
            <input type="hidden" name="qr_id" value="{{$qr_data->id}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
    </div>
  </div>

@endsection