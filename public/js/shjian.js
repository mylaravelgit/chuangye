$(function() {
	var EventUtil = {
		addHandler: function(element, type, handler) {
			if(element.addEventListener) {
				element.addEventListener(type, handler, false);
			} else if(element.attachEvent) {
				element.attachEvent('on' + type, handler);
			} else {
				element['on' + type] = handler;
			}
		},

		preventDefault: function(event) {
			if(event.preventDefault) {
				event.preventDefault();
			} else {
				event.returnValue = false;
			}
		}
	};
	var mediaQuery = {
		init: function() {
			var _this = this;
			_this.outputSize();
			EventUtil.addHandler(window, "resize", function() {
				_this.outputSize(); //前面的this要单独保存，否则在这里this指的是window
			});
		},
		outputSize: function() {
			var result1 = window.matchMedia('(min-width:1200px)');
			var result2 = window.matchMedia('(min-width:992px)');
			var result3 = window.matchMedia('(min-width:768px)');

			if(result1.matches) {
				//               console.log(">=1200 大型设备 大台式电脑");
			} else if(result2.matches) {
				//               console.log("992=< <=1200 中型设备 台式电脑");
			} else if(result3.matches) {
				//               console.log("768<= <=992 小型设备 平板电脑");
				$('.introd').removeClass("pull-right");
				$('.introd').removeClass("pull-left");
				$('.introd').addClass("text-center");
				$('.introd').addClass("center-block");
			} else {
				console.log("<=768 超小设备 手机");
				//	套餐页移动端点击显示	
				var meal = $(".meal");
				meal.on("click", function() {
					$(this).siblings(".taocan-xs").show();
				});

			}
		}
	};
	//   	执行代码
	mediaQuery.init();

	$('.hover-drop').hover(function() {
		$('.hover-dropcentent').stop().slideDown();
	}, function() {
		$('.hover-dropcentent').stop().slideUp();
	});

	$('.majors').hover(function() {
		$(this).addClass('active');
	}, function() {
		$(this).removeClass('active');
	})

	$('.logoshow img').hover(function() {
		$(this).addClass('hover').parent("div").css("z-index", '9');
	}, function() {
		$(this).removeClass('hover').parent("div").css("z-index", '0');;
	})

	//	登录页面
	var WeChat_img = $(".WeChat .entry-icon img");
	var mobile_img = $(".mobile .entry-icon img");
	$(WeChat_img).on("click", function() {
		$(".mobile").show();
		$(".WeChat").hide();
	});
	$(mobile_img).on("click", function() {
		$(".WeChat").show();
		$(".mobile").hide();
	});

	//	设计库
	/*
	var library_title=$(".library-title>li");
	
	var libraryBox_item=$(".libraryBox .item");
	
	$(libraryBox_item).first().show();
	
	$(library_title).on("click",function(){
		$(libraryBox_item).eq($(this).index()).show().siblings().hide();
		$(this).addClass("active").siblings().removeClass("active");
	});*/

	//	价格方案页面弹窗
	var tc = $('#set_Meal .pop_up');
	var iknow = $('#set_Meal .iknow');
	$(iknow).on("click", function() {
		$(tc).fadeOut();
	});

	var zf = $('#set_Meal .buy_pop_up .buy_way a');
	$(zf).hover(function() {
		$(this).addClass("active").find("img").hide();
		$(this).find("p").show();
	}, function() {
		$(this).removeClass("active").find("img").show().find("p").hide();
		$(this).find("p").hide();
	});

	//order页面
	//$(".order_vi .example_logo").attr("src",$(".order .check_logo img.result_img")[0].src);

	//FAQ常见问题
	var faq_ques = $("#faq .faq-que li p");
	$(faq_ques).on("click", function() {
		if($(this).children("span").hasClass("glyphicon-triangle-bottom")) {
			$(this).next(".answer").fadeIn(200);
			$(this).children("span").removeClass("glyphicon-triangle-bottom");
			$(this).children("span").addClass("glyphicon-triangle-top")
		} else {
			$(this).next(".answer").fadeOut(200);
			$(this).children("span").removeClass("glyphicon-triangle-top");
			$(this).children("span").addClass("glyphicon-triangle-bottom")
		}

	});

	//	购买套餐弹窗
	var pay_close = $(".buy_pop_up_close");
	$(pay_close).on("click", function() {
		$(this).parents(".buy_pop_up").fadeOut();
	});

	//	案例左右滑动
	var index_case = $("#carousel-example-generic .item");
	var index_case_btn = $(".carousel-indicators li");
	$(index_case).on("touchstart", function(e) {
		// 判断默认行为是否可以被禁用
		if(e.cancelable) {
			// 判断默认行为是否已经被禁用
			if(!e.defaultPrevented) {
				e.preventDefault();
			}
		}
		startX = e.originalEvent.changedTouches[0].pageX,
			startY = e.originalEvent.changedTouches[0].pageY;
	});
	$(index_case).on("touchend", function(e) {
		// 判断默认行为是否可以被禁用
		if(e.cancelable) {
			// 判断默认行为是否已经被禁用
			if(!e.defaultPrevented) {
				e.preventDefault();
			}
		}
		moveEndX = e.originalEvent.changedTouches[0].pageX,
			moveEndY = e.originalEvent.changedTouches[0].pageY,
			X = moveEndX - startX,
			Y = moveEndY - startY;
		//左滑
		if(X > 0) {
			//   	 	alert('左滑');
			var num = $(this).index() - 1;
			index_case_btn.eq(num).trigger("click");

		}
		//右滑
		else if(X < 0) {
			//      alert('右滑');   
			var num = $(this).index() + 1;
			index_case_btn.eq(num).trigger("click");
		}
		//下滑
		else if(Y > 0) {
			//      alert('下滑');    
		}
		//上滑
		else if(Y < 0) {
			//      alert('上滑');    
		}
		//单击
		else {
			//      alert('单击');    
		}
	});

	//获取服务器时间
	var time = new Date();
	time = time.getFullYear() + "." + (time.getMonth() + 1) + "." + time.getDate();
	//  console.log(time);
	//替换首页数据截止时间	
	var index_time = $(".index_time");
	index_time.html(("截止 " + time));

	//套餐选择
	var setmeal_check = $("#set_Meal .meal");
	$(setmeal_check).on("click", function() {
		$(this).addClass("active");
		$(this).parent("div").siblings("div").find(".meal").removeClass("active");
		$(this).parent("div").siblings("div").find(".taocan-xs").hide();

		$(this).find(".icon_shop").addClass("active");
		$(this).parent("div").siblings("div").find(".meal").find(".icon_shop").removeClass("active");
	});

	//下载页遮罩
	//			function pop_up_download(){
	//				
	//				
	//			};

	//我的设计遮罩
	var shoppingcart = $("#user .libraryBox .shoppingcart");
	shoppingcart.hover(function() {
		alert(1);
	});

	/*锚点滚动*/

	$(".goBack_top").on("click", function() {
		$("html,body").animate({
			scrollTop: $($(this).attr("href")).offset().top + "px"
		}, 600);
	});

	/*锚点隐藏与显示*/

	$(window).scroll(function() {
		// 滚动条距离顶部的距离 大于 等于1000px时
		var goback = $('.goBack_top');
		if($(window).scrollTop() >= 1500) {
			$(goback).css('display', 'block');
		} else {
			$(goback).css('display', 'none');
		}
	});

	//	商标注册页类别选择
	$('#tag_edit').tagEditor({

		initialTags: [],

		sortable: false,

		placeholder: '选取类别'

	});

	function select() {
		var select = $(".select"),
			tag_editor = $(".tag-editor"),
			select_li = $(".select li");
		tag_editor.on("click", function() {
			select.show();
			$(this).find("li:last").hide();
		});
		select_li.on("click", function() {
			select.hide();
		});

	};
	select();

	//  去除商标类别选择的默认样式
	$(".tag-editor li").eq(0).css("margin", "0");

	//判断商标注册页填写信息	
	var search_name = $("#search_name"),
		search_btn = $(".search_btn"),
		popup_tel_wrap = $(".popup_tel_wrap");

	search_btn.on("click", function() {
		if(search_name[0].value.replace(/(^\s*)|(\s*$)/g, "") == "" || ($(".tag-editor li .tag-editor-tag").length == 0)) {
			return false;
		} else {
			popup_tel_wrap.fadeIn(300);
		}
	});
	
//	套餐内容展示
	var  demonstration = function () {
		var demonstra = $("#demonstration");
		var bg = $("#demonstration .bg");
		$(".pay99").on("click",function(){
			demonstra.show();
			bg.show();
			demonstra.find(".VI99").fadeIn();
		});
		$(".pay199").on("click",function(){
			demonstra.show();
			bg.show();
			demonstra.find(".VI199").fadeIn();
		});
		$(".pay699").on("click",function(){
			demonstra.show();
			bg.show();
			demonstra.find(".VI699").fadeIn();
		});
		$("#demonstration .close").on("click",function(){
			demonstra.hide();
			$(this).parents(".demonstra").fadeOut(300);
			bg.hide();
		});
		
	}
	demonstration();
	
});