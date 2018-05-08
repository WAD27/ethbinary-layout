$(document).ready(function() {

  img_liquid()

})
//
function img_liquid() {

  $(".imgLiquid.imgLiquidFill").imgLiquid()
  $(".imgLiquid.imgLiquidNoFill").imgLiquid({fill:false})
  $(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
    fill:false,
    horizontalAlign:"left"
  })
  $(".imgLiquid.imgLiquidNoFillRight").imgLiquid({
    fill:false,
    horizontalAlign:"right"
  })

}
