@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card" style="border: 0;">
                <div class="card-header">
                        <a href="#"><button class="btn btn-warning">&nbsp;Dashboard</button></a>
                        @foreach ($errors->all() as $error)
                            <li style="float:right;color:red;">{{ $error }}</li>
                        @endforeach
                    </div>
				
				



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('error') }}
                            </div>
                        @endif
                        <br>
                        @if(Auth::user()->role =='1')
                        <div class="row">
                            <div class="col">
                                <a href="/manage_user" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="data:image/png;base64,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" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>Manage User</p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/order_list" style="text-decoration: none;">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKHBtbpsnW220pNmcPDcm5uCBFJkx4x7k44fwowNYICaWHgDPn9GSW2IbivK5cGTTDHVQ&usqp=CAU" style="width:50px;height:50px;">
                                                </h2>
                                                <p>Orders</p>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <a href="/product_list" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="data:image/png;base64,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" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>Manage Products</p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/report" style="text-decoration: none;">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9CAMAAAC4XpwXAAAAw1BMVEX////yZjn4mDgbdZxlZmVgYWAAa5YAZpLW5ewAbZfU4umevs8Wc5vi7PHv9Pc2gaSlv9DK2+VUka+dn5384NhXWFfxVRf39/dtbm3xXCXT09PyYTDr6+uKi4rj4+OSk5J1dnXHyMf5vq+rrKvwSgD1kHX2oIj4lCvzcUj+9ez96uX0fVr4jhT+8/D4rZiAgYD82bz5p1r5ok76zMH+7N230dyBq8G2t7b71837wI/5rGX1imv94cj7yaH6tnhMTUxrn7hN0Xo6AAAEhklEQVRoge3b63KiMBgG4MDWtm6t27UiIkorVhEERdF6qLR7/1e14Sy0JiQSne7y/uhMZ8THfCaBIAGgzGHEOoOI+ez6XeMXgzTu7nPgq9p1jUmuqyss/nD9g1muHzD4fZWRXPP/Yor/Wo1fWXC8N66+IvH6r5r3mnsG8dv1A6nfwpfUGphvhzIN2LAbZOl/wj5XvWOjP8CW3dyWeqmjdLE/eDw9a4VK71cKSq9LrneFq4IiPF1U79FUXhAKKbwwo6i81+sK6HS0va7wlPo30UVMWOpKG5fnfnSYgur1HQpdvKrgppGKEI7kbhs5NXTIdSXHXCeEjV8jX1uhmOvyzLQfnVz6jFwH6w8Bl/D0AZQr5FTbp9CB0sEknkNhr3s6GqpeV3xKvdTJ9eZmszGsS+mcDDMeqsa5dd3e6mAiczCyJA0359T3O83U9mDk6/4HeKNpP5W+n2saz2s2mEY69Dn1PPrWs6HuAifROU6ankHX574N9XfQPNQpeGJdX4Q4z8+BwaUikRafVI9b7gVYkzQvN9nq7we4poM3Oa1PDg5EnY4VKt0+wHlzmQy5z7VHL7cHFLq+4A91G6hSWufG0WFiG3kJ+iGS6+5h0/0hl9Vb0aTXRV//Cgq5bvIpHQ65DM7Jw+i4GYqvCOSV36d1OOSscZYfR+uZbu/5eGYdcn2rpfXskJNlSU4GXY4lF5E+z+DaEgyDs5wXbvw2Uh2iEU+i69mme2e5ltRqyW+jqdOkuMog0ZdmVreBozpGWEZ9ubTd3f58upuw77sFr2kanAPCIHtdTzld598TNjjrRh8IpocccZUCdD5WD76MsOlFzzafet0XMaPvXUTiNDMtHudNPTpujbi1KAiPxJVPnV6PJTmw0z8einsXmZPMV4FTP0mIdP1zt8vqNuqtTtPBAqfzqHc6Vd9jSp+MdhY62CF5baGj3ulkfYluOtEkT66nLyuz+JYQJ19NuEf7PeFoo9LB9giv7YhxmlWkq31VffKy0+lg+bnna4t804zVdLxsLHodiO4i1X6Nd/MNtc1YCjJx6HUYe2eapn9RYZpzO+cwt7h44fVykg4Dr2vcrWsv88lemsnKp9U8USdPqf8/ujoZ+xlZF9BHkhwuMMfG+fWX2JPUUv+uelc5nvgXYMuZ+nGsYvU+6ie+drg+MSaSfysDnsiMInURuSyttIPXj2JCGhWpY34FFoLaD+OzqHf37NxtZ6Wjb70+dxjroItI1OfZ6XlS6gx08bF3PAORsT5DPUcSPfTASsfNNmz17scldfCErPyAsQ7Wg+OJnnH6R0dcqV9KFxFPLz2tLzvXPbLVLzzX5dLTV5WtxHOAkegvFnHle3kqb4yDK2pZgutG4Ejhfy3vB9ppK7raHgFiHaCenl9HB1jqyI/qN685Df4LblJtgv+m4S/V3/k5q1Jnqd96+h82+h+sXve3c62wj1ATB4grf/dZHf0Bvd1ptQaD1Gr4DWA/b/ytdAzi75H7jfl2XlnuTERvzgt4JlsDYUExOwODrBpsKt/AlT3M/W8GybMb9sz5C2yaLlGsoNi9AAAAAElFTkSuQmCC" style="width:50px;height:50px;">
                                                </h2>
                                                <p>View Report</p>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif

                          @if((Auth::user()->role =='0') && (Auth::user()->status =='1'))
                        <div class="row">
                            <div class="col">
                                <a href="/product_list" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://cdn0.iconfinder.com/data/icons/zwo-shopping-ecommerce-vol-1/25/add_upload_product-512.png" style="width:50px;height:50px;">
                                                    </h2>
                                                <p>Upload Products </p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/order_list" style="text-decoration: none;">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQukWln7rOMysD_hkZYQzP1rBZW5WbimDJuHFYyuM_xVg&s" style="width:50px;height:50px;">
                                                </h2>
                                                <p>Borrowed Products</p>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/manage_order" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbP-6O9FpGBihvl6mR4HSvCr97WfENdPtaCg&usqp=CAU" style="width:50px;height:50px;">
                                                </h2>
                                                <p>Shared Products </p>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="/edit_profile" style="text-decoration: none;">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">
                                                    <img src="data:image/png;base64,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" style="width:50px;height:50px;">
                                                </h2>
                                                <p>Edit Profile</p>
                                            </center>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @if((Auth::user()->role =='0') && (Auth::user()->status =='0'))
                        <center>
                           <p style="color:red;">Yor Account has beeb suspended.Contact admin@gmail.com for futher information </p>
                        </center>
                        @endif
                </div>
                <div class="card-footer" style="background-color:#a8e063;border: 0;height: 1px;">

                </div>
            </div>
        </div>

</div>
@endsection
