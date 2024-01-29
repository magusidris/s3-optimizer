# Optimize

Automagitically optimize your images on S3 with the magic of imagekit.io.

Optim is a super-simple [S3](https://aws.amazon.com/s3 "Run code without thinking about servers or clusters"), and runs everything it can through [imagekit.io](https://imagekit.io "Streamline how you work
with images and videos").

## Setup

-   Clone this repo

-   Run `npm install`

-   Fill in `AWS_ACCESS_KEY_ID` and `AWS_SECRET_ACCESS_KEY` in `.env` to a set of credentials that can create Lambda functions (alternatively have these already in your environment)

-   Run `npm run deploy`

-   You can now hook this function up to any S3 bucket you like in the management console. Easiest way is to follow [AWS's guide][s3-evt-setup]

## Configuration

There are two sets of configuration here. The `.env` file contains configuration related to setup and deployment, and `runtime.env` is for configuration of how Optim behaves.

In `.env`:

-   `AWS_ACCESS_KEY_ID`: the AWS access key used to deploy the Lambda function
-   `AWS_SECRET_ACCESS_KEY`: the corresponding secret access key
-   `AWS_DEFAULT_REGION`: which region to deploy to
-   `AWS_BUCKET`: the AWS public bucket
-   `AWS_BUCKET_PRIVATE`: the AWS private bucket if you used
-   `AWS_USE_PATH_STYLE_ENDPOINT`: the path style endpoint, use false / true (default false)
-   `AWS_URL`: the AWS url / imagekit url

[s3]: https://aws.amazon.com/s3
[imagekit]: https://imagekit.io
[s3-evt-setup]: http://docs.aws.amazon.com/AmazonS3/latest/UG/SettingBucketNotifications.html
