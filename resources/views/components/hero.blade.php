<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase" id="keyLine">Design &middot; Development &middot; Marketing</div></div>
                    <div id= "title" class="fs-3 fw-light text-muted"></div>
                    <h1 id="short-title" class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Get online and grow fast</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{asset("/resume")}}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{asset("/projects")}}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <img id = "profile-img" class="profile-img" src="" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>

    getHeroData();
    async function getHeroData(){

        try{
            let URL = "/heroData";
            let response = await axios.get(URL);
            document.getElementById('keyLine').innerHTML = response.data['keyLine'];
            document.getElementById('title').innerHTML = response.data['title'];
            document.getElementById('short-title').innerHTML = response.data['shortTitle'];
            document.getElementById('profile-img').src = response.data['img'];

        } catch(e){
            alert(e);
        }

    }

</script>