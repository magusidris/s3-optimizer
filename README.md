# Optim

Automagitically optimize your images on S3 with the magic of imagekit.io.

Optim is a super-simple [S3](https://aws.amazon.com/s3 "Run code without thinking about servers or clusters"), and runs everything it can through [imagekit.io](https://imagekit.io "Streamline how you work
with images and videos").


## Setup

 * Clone this repo

 * Run `npm install`

 * Fill in `AWS_ACCESS_KEY_ID` and `AWS_SECRET_ACCESS_KEY` in `.env` to a set of credentials that can create Lambda functions (alternatively have these already in your environment)

 * Create an IAM role for Optim to use. It needs the following permissions on all the S3 buckets you want to use (allowing these operations on ARN `*` is easiest to start with):
   * `getObject`
   * `putObject`
   * `putObjectAcl`


 * Find the ARN for this role. It looks something like `arn:aws:iam::1234567890:role/rolename`.

 * Fill in `AWS_ROLE_ARN` in `.env`

 * Run `npm run deploy`

 * Hurrah, your Lambda function is now deployed! It'll be created with the name `optim-production` unless you changed values in `.env`

 * You can now hook this function up to any S3 bucket you like in the management console. Easiest way is to follow [AWS's guide][s3-evt-setup]


## Configuration

There are two sets of configuration here. The `.env` file contains configuration related to setup and deployment, and `runtime.env` is for configuration of how Optim behaves.

In `.env`:

 * `AWS_ACCESS_KEY_ID`: the AWS access key used to deploy the Lambda function
 * `AWS_SECRET_ACCESS_KEY`: the corresponding secret access key
 * `AWS_DEFAULT_REGION`: which region to deploy to
 * `AWS_BUCKET`: the AWS public bucket
 * `AWS_BUCKET_PRIVATE`: the AWS private bucket if you used
 * `AWS_USE_PATH_STYLE_ENDPOINT`: false / true
 * `AWS_URL`: the AWS url

In `runtime.env`:

 * `UPLOAD_ACL`: finalised images will be uploaded with this permission level. Should be one of `private` `public-read` `public-read-write` `aws-exec-read` `authenticated-read` `bucket-owner-read` `bucket-owner-full-control`. Default is `public-read`.
 * `MAX_FILE_SIZE`: files over this size in bytes will be skipped (e.g. big PNGs will probably just hit the timeout anyway). Set to `-1` for no limit
 * `PNG_OPTIM_LEVEL`: Optimization level to use for PNGs, between 0 and 7. Lower level means faster optimization, higher means better results.


[s3]: https://aws.amazon.com/s3
[imagekit]: https://imagekit.io
[s3-evt-setup]: http://docs.aws.amazon.com/AmazonS3/latest/UG/SettingBucketNotifications.html
