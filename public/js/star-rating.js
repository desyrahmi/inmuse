$(document).ready(function(){
    $(function () {
        $('.reviewRating').each(function (idx, element) {
            var reviewId = $(element).attr('reviewId');
            var ratingValue = $(element).attr('ratingValue');
            $("." + reviewId).rateYo({
                rating: Number(ratingValue),
                starWidth: "18px",
                readOnly: true
            });
        });

        $('.indexRatingStar').each(function (idx, element) {
            var albumId = $(element).attr('albumId');
            var ratingValue = $(element).attr('ratingValue');
            $("." + albumId).rateYo({
                rating: Number(ratingValue),
                starWidth: "18px",
                readOnly: true
            });
        });

        $(".ratingStar").rateYo({
            rating: Number($('.ratingStar').attr('avgRating')),
            readOnly: true
        });

        $(".userRatingInput").rateYo({
            rating: 0,
            fullStar: true,
            onSet: function (rating, rateYoInstance) {
                $('#userRating').attr('value', rating);
            }
        });
    });
});