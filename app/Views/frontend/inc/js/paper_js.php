
<script>
    $(document).ready(function () {
        const userId = '<?= $_COOKIE[SES_USER_USER_ID] ?>';
        if (userId) {
            popular_papers(userId);
        } else {
            console.error('User ID cookie not found.');
        }
    })

    function popular_papers(user_id) {
       
       $.ajax({
           url: "<?= base_url('/api/user/popular-papers') ?>",
           type: "GET",
           data:{user_id:user_id},
           beforeSend: function () {
           },
           success: function (resp) {
               console.log(resp)
               if (resp.status) {
                   let html =``
                //    let html2 =``
                   $.each(resp.data, function (index, paper) {
                        let redirect_url = ``
                       if(paper.type == 'link'){
                        redirect_url = paper.link
                       } else if(paper.type == 'pdf'){
                            redirect_url = '<?= base_url('pdf-reader?pdf_url=')?>'+paper.pdf
                       }
                       html += `<div onclick="window.location.href='${redirect_url}'" class="banner">
                                    <div class="img-cont">
                                        <img src="<?= base_url()?>public/uploads/popular_paper/${paper.img}" alt="Banner Image">
                                    </div>
                                    <div class="banner-content">
                                        <h3>${paper.keyword}</h3>
                                        <p>${paper.title}</p>
                                        <h3 style="color:black;">${paper.class_name}</h3>
                                        <h3 style="color:black;">${paper.branch_name}</h3>
                                    </div>
                                </div>
                                `
                   })
                   $('#banner-container').html(html);
               } else {
                $('#banner-container').html(`<span style="color: red; display: block; text-align: center; margin: 0 auto;">Papers Not Found!</span>`);
               }

           },
           error: function (err) {
               console.log(err)
           },
           complete: function () {

           }
       })
    }

    function search_popular_papers() {
       let user_id = '<?= $_COOKIE[SES_USER_USER_ID] ?>';
       let alphabet = $('#searchStudyMaterial').val()
       $.ajax({
           url: "<?= base_url('/api/search/popular-papers') ?>",
           type: "GET",
           data:{user_id:user_id,
                alph: alphabet
            },
           beforeSend: function () {
           },
           success: function (resp) {
               console.log(resp)
               if (resp.status) {
                   let html =``
                //    let html2 =``
                   $.each(resp.data, function (index, paper) {
                        let redirect_url = ``
                       if(paper.type == 'link'){
                        redirect_url = paper.link
                       } else if(paper.type == 'pdf'){
                            redirect_url = '<?= base_url('pdf-reader?pdf_url=')?>'+paper.pdf
                       }
                       html += `<a href="${redirect_url}" style="text-decoration:none;">
                                    <div class="banner">
                                        <img src="<?= base_url()?>public/uploads/popular_paper/${paper.img}" alt="Banner Image">
                                        <div class="banner-content">
                                            <h3>${paper.keyword}</h3>
                                            <p>${paper.title}</p>
                                            <h3 style="color:black;">${paper.class_name}</h3>
                                            <h3 style="color:black;">${paper.branch_name}</h3>
                                        </div>
                                    </div>
                                </a>`
                   })
                   $('#banner-container').html(html);
               } else {
                $('#banner-container').html(`<span style="color: red; display: block; text-align: center; margin: 0 auto;">Papers Not Found!</span>`);
               }

           },
           error: function (err) {
               console.log(err)
           },
           complete: function () {

           }
       })
    }

   

</script>