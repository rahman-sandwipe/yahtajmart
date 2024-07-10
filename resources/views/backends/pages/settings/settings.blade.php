
<div class="body">
    <div class="clearfix">
        <form action="{{ route('config.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_name">Web Name</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="web_name" value="{{ $config->web_name }}" id="web_name" class="form-control" required>
                </div>
            </div>
            {{-- WebSite Name   --}}

            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_tagline">Web Tageline</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="web_tagline" value="{{ $config->web_tagline }}" id="web_tagline" class="form-control" required>
                </div>
            </div>
            {{-- WebSite Tagline --}}

            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_link">Web Link</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="web_link" value="{{ $config->web_link }}" id="web_link" class="form-control" required>
                </div>
            </div>
            {{-- WebSite Name --}}
            
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_logo">Web Logo</label>
                </div>
                <div class="col-md-9">
                    <input type="file" name="web_logo" id="web_logo" class="form-control">
                </div>
                <div class="col-md-1">
                    <img src="{{ asset($config->web_logo) }}" alt="logo" width="50">
                </div>
            </div>
            {{-- WebSite Logo --}}
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="web_fevicon">Web Fevicon</label>
                </div>
                <div class="col-md-9">
                    <input type="file" name="web_fevicon" id="web_fevicon" class="form-control">
                </div>
                <div class="col-md-1">
                    <img src="{{ asset($config->web_fevicon) }}" alt="logo" width="50">
                </div>
            </div>
            {{-- WebSite Fevicon --}}
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="web_timezone">Timezone</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="web_timezone" value="{{ $config->web_timezone }}" id="web_timezone" class="form-control">
                </div>
            </div>
            {{-- WebSite Timezone --}}
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="web_authors">Web Authors</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="web_authors" value="{{ $config->web_authors }}" id="web_authors" class="form-control">
                </div>
            </div>
            {{-- Web Authors --}}
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="author_mail">Authors Mail</label>
                </div>
                <div class="col-md-10">
                    <input type="email" name="author_mail" value="{{ $config->author_mail }}" id="author_mail" class="form-control">
                </div>
            </div>
            {{-- WebSite Authors --}}
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="author_phone">Authors Number</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="author_phone" value="{{ $config->author_phone }}" id="author_phone" class="form-control">
                </div>
            </div>
            {{-- Authors Contacts Number --}}

            <div class="form-group row">
                <div class="col-md-2">
                    <label for="author_address">Authors Address</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="author_address" value="{{ $config->author_address }}" id="author_address" class="form-control">
                </div>
            </div>
            {{-- Author Address --}}

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="web_metatags">Meta Tags</label>
                    <textarea name="web_metatags" id="web_metatags" class="form-control" rows="4">{!! $config->web_metatags !!}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="web_metadesc">Meta Desc</label>
                    <textarea name="web_metadesc" id="web_metadesc" class="form-control" rows="4">{!! $config->web_metadesc !!}</textarea>
                </div>
            </div>
        
            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>