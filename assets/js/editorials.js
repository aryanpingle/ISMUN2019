window.onload = function() {
    var x = document.getElementsByClassName('col-12')[0];
    x = x.getElementsByTagName('h2')[2];
    x.innerHTML = '<a href="https://drive.google.com/file/d/1ZGyYJayLQ1y0VWwn2lt6fbWMKlfBSpRr/view?usp=drivesdk" style="font: inherit;">[ Day 1 Issue ]</a><br><a href="https://drive.google.com/open?id=1kiOZJZcyLnc5pIyD6nRDmRZtPc9nWSKl" style="font: inherit;">[ Day 2 Issue ]</a>';
    console.log(x);
    //x.innerHTML = "<h2 style='color: black; margin: 0; text-align: center;''><a download href='https://drive.google.com/file/d/1ZGyYJayLQ1y0VWwn2lt6fbWMKlfBSpRr/view?usp=drivesdk' style='font: inherit;'>[ Day 1 Isyosue ]</a></h2>";
};