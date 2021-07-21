export default {
  verticalSlider() {
    return {
      arrows: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 650,
          settings: {
            slidesToShow: 1,
            adaptiveHeight: true,
          },
        },
      ],
    }
  },
}