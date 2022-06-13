<script>
	var qranim = document.getElementById("qranim")
	var anim = bodymovin.loadAnimation({

		wrapper: qranim,
		animType: "svg",
		loop: true,
		hover: true,
		autoplay: true,
		path: "https://assets3.lottiefiles.com/packages/lf20_VBwuuR.json"
	})

	function agree() {
		if ($('#terms').prop('checked')) {
			$('#qrcode').css({
				filter: 'blur(0px)'
			});
        //window.open('https://www.google.com', '_blank');
    } else {
    	$('#qrcode').css({
    		filter: 'blur(10px)'
    	});
        //return false;
    }
}
var one = simpleslider.getSlider({
	container: document.getElementById('eligg')
});
var two = simpleslider.getSlider({
	container: document.getElementById('walli')
});
    // $('.elig').slick({
    //   dots: true,
    //   infinite: false,
    //   speed: 300,
    //   slidesToShow: 4,
    //   slidesToScroll: 4,
    //   responsive: [{
    //       breakpoint: 1024,
    //       settings: {
    //         slidesToShow: 3,
    //         slidesToScroll: 3,
    //         infinite: true,
    //         dots: true
    //       }
    //     },
    //     {
    //       breakpoint: 600,
    //       settings: {
    //         slidesToShow: 2,
    //         slidesToScroll: 2
    //       }
    //     },
    //     {
    //       breakpoint: 480,
    //       settings: {
    //         slidesToShow: 1,
    //         slidesToScroll: 1
    //       }
    //     }
    //     // You can unslick at a given breakpoint now by adding:
    //     // settings: "unslick"
    //     // instead of a settings object
    //   ]
    // });
    $(document).foundation()
    $('.home-build').paroller()
    $('.home-for').paroller()
    $('.home-r-s-25999').paroller()
    AOS.init();
    const animheadphone = new Vivus('Headphones_Graphic', {
    	duration: 500,
    	type: 'sync',
    	start: 'manual'
    });
    document.addEventListener('aos:in:support', ({
    	detail
    }) => {

    	animheadphone.play(2, function() {})
    });
    document.addEventListener('aos:out:support', ({
    	detail
    }) => {
    	console.log('animated out', detail);
    	animheadphone.reset()
    });
    const animflag = new Vivus('indiamap_graphic', {
    	duration: 400,
    	type: 'sync',
    	start: 'manual'
    });
    document.addEventListener('aos:in:slogan', ({
    	detail
    }) => {

    	animflag.play(1.6, function() {})
    });
</script>
<script>
	function pause(el) {
		if (el.id == 'checkeligibilty') {
			one.pause()
		}
		if (el.id == 'Walletcheck') {
			two.pause()
		}
	}

	function resume(el) {
		if (el.id == 'checkeligibilty') {
			one.resume()
		}
		if (el.id == 'Walletcheck') {
			two.resume()
		}
	}
</script>
<!-- LOGIN and SIGNUP page script -->
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('login-container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>
</body>

</html>