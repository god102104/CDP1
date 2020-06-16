		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="/glancePublic/ws/js/jquery.min.js"></script>
		<script src="/glancePublic/ws/js/popper.min.js"></script>
		<script src="/glancePublic/ws/js/bootstrap.min.js"></script>
		<script src="/glancePublic/ws/js/functions.js"></script>
		<script src="/glancePublic/ws/js/select2.min.js"></script>
		<script src="/glancePublic/ws/js/aos.js"></script>
		<script src="/glancePublic/ws/js/perfect-scrollbar.jquery.min.js"></script>
		<script src="/glancePublic/ws/js/owl.carousel.min.js"></script>
		<script src="/glancePublic/ws/js/jquery.counterup.min.js"></script>
		<script src="/glancePublic/ws/js/slick.js"></script>
		<script src="/glancePublic/ws/js/bootstrap-datepicker.js"></script>
		<script src="/glancePublic/ws/js/isotope.min.js"></script>
		<script src="/glancePublic/ws/js/summernote.js"></script>
		<script src="/glancePublic/ws/js/jQuery.style.switcher.js"></script>
		<script src="/glancePublic/ws/js/coreNavigation.js"></script>
		<script src="/glancePublic/ws/js/counterup.min.js"></script>
		<script src="/glancePublic/ws/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	<script>

		// 정용진 2020. 05. 14
		// 요양사, 채용자 구분에 따른 show, hide 처리 (최초 불러올때)
		var division = '<?=$row->division?>';
		$( document ).ready(function() {
			if(division == 'yoyang') {
			//if($("#division").val() == 'yoyang'){
				$("#div_yoyangsa_form").show();
				$("#div_chaeyong_form").hide();
			}else {
				$("#div_chaeyong_form").show();
				$("#div_yoyangsa_form").hide();
			}
		});

		// 정용진 2020. 05. 14
		// 요양사, 채용자 구분에 따른 show, hide 처리 (select 선택시)
		$(function() {
			$("#division").change( function() {
				if (this.value == 'yoyang'){
					$("#div_yoyangsa_form").show();
					$("#div_chaeyong_form").hide();
				} else {
					$("#div_chaeyong_form").show();
					$("#div_yoyangsa_form").hide();
				}
			});
		});

		// 데이트피커(생년월일, 근무시작일)
		$(function () {
			$( "#dob" ).datepicker();
			$("#emp_date").datepicker();
		});
		
		// 파일 선택
		$(".custom-file-input").on("change", function() {
		  	var fileName = $(this).val().split("\\").pop();
		  	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});

		// $('#emp_detail').on('show.bs.modal', function (event) {
		//   var bookId = $(event.relatedTarget).data('bookid') 
		//   $(this).find('.modal-body input').val(bookId)
		// })
	</script>


	</body>
</html>