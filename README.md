# Support for Amazon S3 as a DFS backend

## Summary

An AmazonS3 DFS FS handler is added to the existing local filesystem one.

The previous `eZDFSFileHandlerDFSBackend`, in charge of reading/writing files to NFS, is in DFS replaced by a dispatcher.
This dispatcher receives a stack of DFSBackend handlers. Each handler will respond true/false when asked if it supports
a file path.

An amazonS3 handler is provided, that can be configured to store images.

## Installation

### Requirements
- ezsystems/ezdfs-fsbackend-dispatcher must installed
- an amazon web services account
- ezsystems/ezpublish-legacy >= v2017.12 (Or any ezpublish version with the patch: https://github.com/ezsystems/ezpublish-legacy/pull/1449/files)

### Installation using composer
From the eZ Publish Community/Platform root, run
```
$ composer require ezsystems/ezdfs-fsbackend-aws-s3:~2.0.x-dev
```

## Configuration

The handler must first be configured in an `dfsamazons3.ini` override. Region must be set to the region code, as listed on http://docs.aws.amazon.com/general/latest/gr/rande.html#s3_region: `eu-west-1`, `us-east-1`... :
```ini
[BackendSettings]
AccessKeyID=
SecretAccessKey=
Bucket=
Region=
```

It must then be be set as an additional handler matching one or several path in a `dispatchabledfs.ini` override:

```ini
[DispatchableDFS]
PathBackends[var/ezdemo_site/storage/images]=eZDFSFileHandlerDFSAmazon
```

## Known issues

When setting up Legacy Bridge, don't forget to follow the documentation here: https://doc.ezplatform.com/en/latest/guide/clustering_aws_s3/ . 

If your images are not proper display, check the value of `url_prefix`:

```
ezpublish:
    system:
        default:
            io:
                url_prefix: 'https://my-bucket.s3.my-region.amazonaws.com/$var_dir$/$storage_dir$'
```