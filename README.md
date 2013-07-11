#PHP 5.4.3

##Results
###Arrays
Time Elapsed: 1.4054470062256s  
Time Elapsed: 1.0627889633179s  
Bytes per object:1064

###Classes
Time Elapsed: 1.2068569660187s  
Time Elapsed: 2.1120779514313s  
Bytes per object:1768

#Conclusion
##Time: 
For every 1000000 (1million) object instantiations, you save about 200ms by using arrays as opposed to classes.

##Memory: 
For every 1000000 (1million) object instantiations, you save about 700MB by using arrays as opposed to classes.