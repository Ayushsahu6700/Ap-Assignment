def function(x):
  a = 0
  b = 1

  if x==1:
    print(a)

  else:
    print(a)
    print(b)
    for i in range(2,x):
        c=a+b
        a=b
        b=c
        print(c)


x = int(input("enter the no of terms you want"))
function(x)
