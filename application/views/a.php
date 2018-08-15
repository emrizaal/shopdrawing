<div class="jumbotron" style="background-color:#F6FBFF">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2 class="patient-tagline" style="color:#16517F">
        @if ($patient->tagline() && !isset($fundraiser))
          {!! $patient->tagline() !!}
        @elseif(isset($fundraiser))
          {!! $fundraiser->campaign_title !!}
        @endif
      </h2>
      </div>
    </div>
    <div class="row" style="margin:20">
      <div class="col-md-10 col-md-offset-1" style="border-radius: 20px;background-color:#fff;box-shadow: 0 4px 20px 0 rgba(67, 153, 214, 0.2), 0 6px 20px 0 rgba(67, 153, 214, 0.19);">
        <div class="row">
          <div class="col-sm-6">
            <div class="row patient-img-full"
            style="background:
            @if (isset($fundraiser) && (!is_null($fundraiser->photo))) url('{{asset('img/fundraiser/'.$fundraiser->photo)}}')
            @else url('{{ asset($patient->photo) }}')
            @endif no-repeat center;
            background-size: 100%;min-height: 250px;background-color:gray;padding-bottom: 0;border-top-left-radius: 20px;">
          </div>
        </div>
        <div class="col-sm-6" style="padding: 20 30;">
          <div class="row">
            <div class="col-md-12">
              <h4 style="color:#16517F;margin-bottom:25px;">Bantu {{ $patient->name }} sekarang</h4>
              <div class="donation-progress progress" style="margin:0;height:7px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$donation_percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$donation_percentage}}%" title="{{$donation_percentage}} %">
                  <span class="sr-only">{{$donation_percentage}}% {!! trans('common.funded') !!}</span>
                </div>
              </div>
              <div class="donation-summary" style="margin-top:0;">
                <div class="col-xs-6" style="padding-left:0;">
                  <h4 class="raised auto-numeric" data-a-sep="." data-a-dec="," data-a-sign="Rp."
                  data-v-max="500000000" data-v-min="0">{{ $current_donation  }}</h4>
                  <p class="donation-label" style="font-size:100%">{!! trans('common.funded') !!}</p>
                </div>
                <div class="col-xs-6 text-right">
                  <h4 class="to-go auto-numeric" data-a-sep="." data-a-dec="," data-a-sign="Rp."
                  data-v-max="500000000"
                  data-v-min="0">{{ $target_donation - $current_donation }}</h4>
                  <p class="donation-label" style="font-size:100%">{!! trans('common.to_go') !!}</p>
                </div>
              </div>
            </div>
          </div>
          <?php if ($donation_percentage < 100) { ?>
            <?php echo Form::open(array('id' => 'donation-form', 'url' => URL::to('make-donation'))); ?>
            <?php echo Form::hidden('patient_id', $patient->id); ?>
            <?php echo Form::hidden('universal_patient_type', $patient->patient_type); ?>

            @include('patient-detail.modal_wecare_operational')

            <input type="hidden" name="fundraiser_id"
            @if(isset($fundraiser))
              value="{{$fundraiser->id}}"
            @else
              value="-1"
            @endif />

            <div class="row" style="margin-top:20px;">
              <div class="col-sm-8">
                <?php echo Form::text('amount', '', array(
                  'id' => 'donation-amount',
                  'class' => 'form-control auto-numeric donate-textbox',
                  'placeholder' => 'Donasi mulai dari Rp25.000',
                  'aria-describedby' => 'amount',
                  'data-v-max' => '5000000000',
                  'data-v-min' => '0',
                  'data-a-sep' => '.',
                  'data-a-dec' => ',',
                  'onKeyPress' => 'return checkSubmit(event)'
                )); ?>
              </div>
              <div class="col-sm-4 m-text-center sm-margin-top-30" style="padding-left:0;">
                @if($patient->is_active!=-1)
                  <button type="button" id="donate-submit-btn" class="btn primary" style="padding: 14px 22px;text-transform: capitalize;box-shadow: 0 4px 20px 0 rgba(250, 68, 93, 0.2), 0 6px 20px 0 rgba(250, 68, 93, 0);">{!! trans('patient.donate') !!}</button>
                @endif
              </div>
              @if (count($errors) > 0)
                <div class="alert col-md-12 col-xs-12">
                  <ul style="font-weight: bold; border-bottom: 6px solid #FB4B5E;">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              </div>
              <?php echo Form::close(); ?>
              <?php } ?>
          </div>
        </div>
        <div class="row" style="background-color:#F6FBFF;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;">
          <div class="col-md-6 col-sm-12 m-text-center">
            @if(isset($patient->medikator->foto))
               @if($patient->medikator->foto!='')
                <img src="{{asset($patient->medikator->foto)}}" style="border-radius:20px;height:30px;">
              @else
                <img src="{{asset('default.jpg')}}" style="border-radius:20px;height:30px;">
              @endif
            @else
            <img src="{{asset('default.jpg')}}" style="border-radius:20px;height:30px;">
            @endif
            <span class="embed-button">
              <span style="font-weight:100;color:#5f88a2;">Diajukan oleh</span> {{isset($patient->medikator->nama) ? $patient->medikator->nama : '' }}
            </span>
          </div>
          <div class="col-md-4 col-sm-6 text-center">
            @include('patient-detail.share')
          </div>
          <div class="col-md-2 col-sm-6 text-center">
            {{-- <a class='embed-button' data-placement='top' title="WeCare.id Embedded Button" href='#'>Embed</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
