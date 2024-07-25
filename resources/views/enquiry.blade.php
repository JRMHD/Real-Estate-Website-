<!-- ENQUIRY -->
<div id="enquiry"
    style="font-family: 'Arial', sans-serif; max-width: 800px; margin: 0 auto; padding: 60px 20px; text-align: center; background-color: #f9f9f9; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
    <h1 style="color: #333; font-size: 36px; margin-bottom: 10px; font-weight: 300;">Enquiry</h1>
    <p style="color: #666; font-size: 16px; margin-bottom: 30px; line-height: 1.6;">Wish to get a call back
        from
        our team? Fill in your details below.</p>
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('enquiry.submit') }}" method="POST"
        style="display: flex; flex-wrap: wrap; justify-content: space-between; margin-bottom: 30px;">
        @csrf
        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required
            style="width: calc(50% - 10px); padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; transition: all 0.3s;">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
            style="width: calc(50% - 10px); padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; transition: all 0.3s;">
        <input type="tel" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required
            style="width: calc(50% - 10px); padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; transition: all 0.3s;">
        <input type="text" name="project" placeholder="Project" value="{{ old('project') }}" required
            style="width: calc(50% - 10px); padding: 15px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; transition: all 0.3s;">
        <button type="submit"
            style="width: 100%; padding: 15px; background-color: #c0aa76; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; transition: all 0.3s; text-transform: uppercase; font-weight: bold;">Submit</button>
    </form>


    <a href="{{ route('download.brochure') }}"
        style="display: inline-block; padding: 12px 25px; border: 2px solid #c0aa76; border-radius: 30px; color: #c0aa76; text-decoration: none; font-size: 14px; transition: all 0.3s; font-weight: bold;">
        ↓ DOWNLOAD BROCHURE // COMPANY PROFILE
    </a>
</div>

<style>
    #enquiry input:hover,
    #enquiry input:focus {
        border-color: #c0aa76;
        box-shadow: 0 0 10px rgba(192, 170, 118, 0.2);
    }

    #enquiry button:hover {
        background-color: #a8925f;
    }

    #enquiry a:hover {
        background-color: #c0aa76;
        color: white;
    }
</style>
