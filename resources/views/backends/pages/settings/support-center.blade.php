
<div class="body">
    <div class="clearfix">
        <form action="{{ route('supportCenter') }}" method="POST">
            @csrf
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="m_number">Main Number</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="m_number" value="{{ $getData->m_number }}" id="m_number" class="form-control" required>
                </div>
            </div>
            {{-- Main Number   --}}
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="s_number">Secondary Number</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="s_number" value="{{ $getData->s_number }}" id="s_number" class="form-control">
                </div>
            </div>
            {{-- Secondary Number--}}


            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="m_email">Main Email</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="email" name="m_email" value="{{ $getData->m_email }}" id="m_email" class="form-control" required>
                </div>
            </div>
            {{-- Main Email --}}
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="s_email">Secondary Email</label>
                </div>
                <div class="col-md-10">
                    <input type="email" name="s_email" value="{{ $getData->s_email }}" id="s_email" class="form-control">
                </div>
            </div>
            {{-- Secondary Email --}}
            
            
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="m_address">Main Address</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="m_address" value="{{ $getData->m_address }}" id="m_address" class="form-control" required>
                </div>
            </div>
            {{-- Main Address --}}
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="s_email">Secondary Address</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="s_address" value="{{ $getData->s_address }}" id="s_address" class="form-control">
                </div>
            </div>
            {{-- Secondary Address --}}
            

            <div class="form-group row">
                <div class="col-md-12">
                    <label for="contacts_info">Contacts Info</label>
                    <textarea name="contacts_info" id="contacts_info" class="form-control">{!! $getData->contacts_info !!}</textarea>
                </div>
            </div>
            {{-- Contacts Info --}}
            
            
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="google_maps">Google Maps</label>
                    <textarea name="google_maps" id="google_maps" class="form-control">{!! $getData->google_maps !!}</textarea>
                </div>
            </div>
            {{-- Google Maps --}}
        
            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>