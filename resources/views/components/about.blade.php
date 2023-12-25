<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4" id = "about-title">My name is Start Bootstrap and I help brands grow.</p>
                    <p class="text-muted" id = "details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target= "_blank" class="text-gradient" id = "twitter" href="#!"><i class="bi bi-twitter"></i></a>
                        <a target = "_blank" class="text-gradient" id= "linkedin" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a target = "_blank" class="text-gradient" id = "github" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>

    getAboutData();
    async function getAboutData(){

        try{
            let URL = "/aboutData";
            let response = await axios.get(URL);
            document.getElementById('about-title').innerHTML = response.data['title'];
            document.getElementById('details').innerHTML = response.data['details'];
        } catch(e){
            alert(e);
        }
    }

    getSocialLinks()
    async function getSocialLinks(){

        try {
            let URL = "/socialData";
            let response = await axios.get(URL);
            document.getElementById('twitter').href = response.data['twitterLink'];
            document.getElementById('linkedin').href = response.data['githubLink'];
            document.getElementById('github').href = response.data['linkedInLink'];

        } catch (error) {
            alert(error);
        }
    }
</script>