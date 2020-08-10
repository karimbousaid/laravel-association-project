<div class="form-row">
        <div class="form-group col-md-6">
        <label for="">الإسم الجمعية <span>*</span></label>
        <input type="text" class="form-control @if($errors->get('الإسم')) is-invalid @endif" name="الإسم" id="الإسم" value="{{ old('الإسم', $association->الإسم ?? null) }}"/>
        @if($errors->get('الإسم'))
            @foreach ($errors->get('الإسم') as $error)
            <i style="color: #C81813;">  {{ $error }}</i>
            @endforeach
        @endif
        </div>
        <div class="col-md-3 mb-3">
        <label for="">تاريخ التأسيس<span>*</span></label>
        <input type="date" class="form-control @if($errors->get('تاريخ_التأسيس')) is-invalid @endif" name="تاريخ_التأسيس" id="تاريخ_التأسيس" value="{{ old('تاريخ_التأسيس', $association->تاريخ_التأسيس ?? null) }}"/>
        @if($errors->get('تاريخ_التأسيس'))
            @foreach ($errors->get('تاريخ_التأسيس') as $error)
            <i style="color: #C81813">  {{ $error }}</i>
            @endforeach
        @endif
        </div>
        <div class="col-md-3 mb-3">
        <label for="inputEmail4">رقم الهاتف <span>*</span></label>
        <input type="text" class="form-control @if($errors->get('الهاتف')) is-invalid @endif" name="الهاتف" id="الهاتف" value="{{ old('الهاتف', $association->الهاتف ?? null) }}">
        @if($errors->get('الهاتف'))
            @foreach ($errors->get('الهاتف') as $error)
            <i style="color: #C81813">  {{ $error }}</i>
            @endforeach
        @endif
        </div>
</div>
<div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="">العنوان<span>*</span></label>
            <input type="text" class="form-control @if($errors->get('العنوان')) is-invalid @endif" name="العنوان" id="العنوان" value="{{ old('العنوان', $association->العنوان ?? null) }}">
            @if($errors->get('العنوان'))
                @foreach ($errors->get('العنوان') as $error)
                <i style="color: #C81813">  {{ $error }}</i>
                @endforeach
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label for="">البريد الإلكتروني<span>*</span></label>
            <input type="email" class="form-control @if($errors->get('البريد_الإلكتروني')) is-invalid @endif" name="البريد_الإلكتروني" id="البريد_الإلكتروني" value="{{ old('البريد_الإلكتروني', $association->البريد_الإلكتروني ?? null) }}">
            @if($errors->get('البريد_الإلكتروني'))
                @foreach ($errors->get('البريد_الإلكتروني') as $error)
                <i style="color: #C81813">  {{ $error }}</i>
            @endforeach
        @endif
        </div>
</div>
  <div class="form-group">
    <label for="inputAddress2">الوصف<span>*</span></label>
    <textarea class="form-control @if($errors->get('الوصف')) is-invalid @endif" name="الوصف" id="الوصف">{{ old('الوصف', $association->الوصف ?? null) }}</textarea>
    @if($errors->get('الوصف'))
            @foreach ($errors->get('الوصف') as $error)
            <i style="color: #C81813">  {{ $error }}</i>
            @endforeach
    @endif
  </div>
  <div class="form-group">
      <label for="">تحميل شعار الجمعية<span>*</span></label>
      <input type="file" class="form-control @if($errors->get('الشعار')) is-invalid @endif" name="الشعار" id="الشعار" value="{{ old('الشعار', $association->الشعار ?? null) }}">
      @if($errors->get('الشعار'))
            @foreach ($errors->get('الشعار') as $error)
            <i style="color: #C81813">  {{ $error }}</i>
            @endforeach
      @endif
  </div>
  <div class="form-group">
      <label for="">تحميل القانون الأساسي<span>*</span></label>
      <input type="file" class="form-control @if($errors->get('القانون_الأساسي')) is-invalid @endif" name="القانون_الأساسي" id="القانون_الأساسي" value="{{ old('القانون_الأساسي', $association->القانون_الأساسي ?? null) }}">
      @if($errors->get('القانون_الأساسي'))
            @foreach ($errors->get('القانون_الأساسي') as $error)
            <i style="color: #C81813">  {{ $error }}</i>
            @endforeach
      @endif
  </div>
  <div class="card">
      <div class="card-header">
          <i class="fa fa-table"></i>  المكتب المسير  
      </div>
<div class="card-body">
          <div class="form-row">
              <div class="form-group col-md-3">
                <label for="">الرئيس<span>*</span></label>
                <input type="text" class="form-control @if($errors->get('الرئيس')) is-invalid @endif" name="الرئيس" id="الرئيس" value="{{ old('الرئيس', $association->user->name ?? Auth::user()->name) }}" disabled>
                @if($errors->get('الرئيس'))
                    @foreach ($errors->get('الرئيس') as $error)
                    <i style="color: #C81813">  {{ $error }}</i>
                    @endforeach
                @endif
              </div>
              <div class="form-group col-md-3">
                <label for="">نائب الرئيس<span>*</span></label>
                <input type="text" class="form-control @if($errors->get('نائب_الرئيس')) is-invalid @endif" name="نائب_الرئيس" id="نائب_الرئيس" value="{{ old('نائب_الرئيس', $association->نائب_الرئيس ?? null) }}">
                @if($errors->get('نائب_الرئيس'))
                    @foreach ($errors->get('نائب_الرئيس') as $error)
                    <i style="color: #C81813">  {{ $error }}</i>
                    @endforeach
                @endif
              </div>
              <div class="form-group col-md-3">
                  <label for="inputEmail4">الكاتب العام<span>*</span></label>
                  <input type="text" class="form-control @if($errors->get('الكاتب_العام')) is-invalid @endif" name="الكاتب_العام" id="الكاتب_العام" value="{{ old('الكاتب_العام', $association->الكاتب_العام ?? null) }}">
                  @if($errors->get('الكاتب_العام'))
                      @foreach ($errors->get('الكاتب_العام') as $error)
                      <i style="color: #C81813">  {{ $error }}</i>
                      @endforeach
                  @endif
                </div>
                <div class="form-group col-md-3">
                  <label for="">نائب الكاتب العام<span>*</span></label>
                  <input type="text" class="form-control @if($errors->get('نائب_الكاتب_العام')) is-invalid @endif" name="نائب_الكاتب_العام" id="نائب_الكاتب_العام" value="{{ old('نائب_الكاتب_العام', $association->نائب_الكاتب_العام ?? null) }}">
                  @if($errors->get('نائب_الكاتب_العام'))
                      @foreach ($errors->get('نائب_الكاتب_العام') as $error)
                      <i style="color: #C81813">  {{ $error }}</i>
                      @endforeach
                  @endif
                </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-3">
                <label for="">أمين المال<span>*</span></label>
                <input type="text" class="form-control @if($errors->get('أمين_المال')) is-invalid @endif" name="أمين_المال" id="أمين_المال" value="{{ old('أمين_المال', $association->أمين_المال ?? null) }}">
                @if($errors->get('أمين_المال'))
                    @foreach ($errors->get('أمين_المال') as $error)
                    <i style="color: #C81813">  {{ $error }}</i>
                    @endforeach
                @endif
              </div>
              <div class="form-group col-md-3">
                <label for="">نائب أمين المال<span>*</span></label>
                <input type="text" class="form-control @if($errors->get('نائب_أمين_المال')) is-invalid @endif" name="نائب_أمين_المال" id="نائب_أمين_المال" value="{{ old('نائب_أمين_المال', $association->نائب_أمين_المال ?? null) }}">
                @if($errors->get('نائب_أمين_المال'))
                    @foreach ($errors->get('نائب_أمين_المال') as $error)
                    <i style="color: #C81813">  {{ $error }}</i>
                    @endforeach
                @endif
              </div>
              <div class="form-group col-md-3">
                  <label for="">المستشار الأول<span>*</span></label>
                  <input type="text" class="form-control @if($errors->get('المستشار_الأول')) is-invalid @endif" name="المستشار_الأول" id="المستشار_الأول" value="{{ old('المستشار_الأول', $association->المستشار_الأول ?? null) }}">
                  @if($errors->get('المستشار_الأول'))
                      @foreach ($errors->get('المستشار_الأول') as $error)
                      <i style="color: #C81813">  {{ $error }}</i>
                      @endforeach
                  @endif
                </div>
              <div class="form-group col-md-3">
                  <label for="">المستشار الثاني<span>*</span></label>
                  <input type="text" class="form-control @if($errors->get('المستشار_الثاني')) is-invalid @endif" name="المستشار_الثاني" id="المستشار_الثاني" value="{{ old('المستشار_الثاني', $association->المستشار_الثاني ?? null) }}">
                  @if($errors->get('المستشار_الثاني'))
                      @foreach ($errors->get('المستشار_الثاني') as $error)
                      <i style="color: #C81813">  {{ $error }}</i>
                      @endforeach
                  @endif
              </div>
           </div>
    </div>
  </div>