
var yr, temp;
function fun()
{
  yr = parseInt(document.getElementById("year").value);
  if(yr)
  {
    temp = document.getElementById("resPara");
    temp.style.display = "block";
    if((yr%4==0) && (yr%100!=0))
      document.getElementById("res").value = "It is a Leap year";
    else if(yr%400==0)
      document.getElementById("res").value = "It is a Leap year";
    else
      document.getElementById("res").value= "It is not a Leap year";
  }
}
