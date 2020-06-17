print("This is a program to plot a graph between axes:-")
import matplotlib.pyplot as plt
k = int(input("Enter the number of elements:"))
print("Enter the elements to be plotted on the x-axis:")
x=[]
print("Please select the type of input:")
print("0 for integer value")
print("1 for strings")
print("2 for float value")
choice1 = int(input())
if choice1==0:            
   for i in range(0,k):
        element= int(input())
        x.append(element)
elif  choice1==1:
        for i in range(0,k):
             element= input()
             x.append(element)
elif choice1==2:
            for i in range(0,k):
                element= float(input())
                x.append(element)
else :
	print("Invalid Choice")
print("Enter the elements to be plotted on the y-axis:")
y=[]
print("Please select the type of input:")
print("0 for integer value")
print("1 for strings")
print("2 for float value")
choice2 = int(input())
if choice2==0:            
    for i in range(0,k):
        ele= int(input())
        y.append(ele)
elif  choice2==1:
            for i in range(0,k):
                 ele= input()
                 y.append(ele)
elif choice2==2:
             for i in range(0,k):
                       ele= float(input())
                       y.append(ele)
else :
	print("Invalid Choice")
plt.plot(x,y)
n=input("X label:")
m=input("Y label:")
g=input("Graph Title:")
plt.xlabel(n)
plt.ylabel(m)
plt.title(g)
plt.show()