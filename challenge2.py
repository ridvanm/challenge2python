def tips(bill, guest,percentage):
  bg = bill / guest
  per = round(bg * (percentage/100))
  tips = per * guest 
  
  return tips 
print(tips(160,4,10))
