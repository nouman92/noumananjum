# noumananjum
Nouman Anjum Pesonal Site

# S3 Deployment

Create S3 Bucket : noumananjum
Properties -> Static Website Hosting, then Enable Website Hosting
set the Index Document to your website’s index file. You should also probably set the Error Document.
Now go to Properties -> Permissions -> Edit bucket policy
{
 "Version": "2012-10-17",
 "Id": "PublicBucketPolicy",
 "Statement": [
  {
   "Sid": "Stmt1482880670019",
   "Effect": "Allow",
   "Principal": "*",
   "Action": "s3:GetObject",
   "Resource": "arn:aws:s3:::noumananjum/*"
  }
 ]
}

Finally, upload your built website to S3.

# CloudFront configuration

Create a new Web distribution

Under Origin Settings, use the Endpoint
Origin Domain Name = https://noumananjum.s3.ap-south-1.amazonaws.com/
Origin Path = leave blank if your conent is in root of bucket other wise write the folder name containing content
Default Cache Behavior Settings =  Redirect HTTP to HTTPS 
Allowed HTTP Methods  =  GET and HEAD
Query String forwarding and cache = Forward all, cached based on whitelist
Query String whitelist = version
check Compress Objects Automatically
Under Distribution Settings
Set your domain names under Alternate Domain Names
Configure SSL by selecting Custom SSL Certificate.
Finally, specify the Default Root Object. This should match your S3 bucket’s Index Document.
# Create
