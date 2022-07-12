CREATE TABLE `album_types` (
  `id` integer,
  `name` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `artists` (
  `id` integer,
  `name` varchar(255),
  `origin_country` varchar(255),
  `formed_in` datetime,
  `contact` varchar(255),
  `web_slug` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `genres` (
  `id` integer,
  `name` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `albums` (
  `id` integer,
  `name` varchar(255),
  `album_type_id` integer,
  `artist_id` integer,
  `release_date` datetime,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `album_types_albums` (
  `id` integer,
  `album_type_id` integer,
  `album_id` integer
);

CREATE TABLE `album_genres` (
  `id` integer,
  `genre_id` integer,
  `album_id` integer
);

CREATE TABLE `media` (
  `id` integer,
  `name` varchar(255),
  `type` varchar(255),
  `ext` varchar(255),
  `path` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `mediable` (
  `id` integer,
  `media_id` integer,
  `mediable_type` varchar(255),
  `mediable_id` integer
);

CREATE TABLE `copyrights` (
  `id` integer,
  `name` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `album_copyrights` (
  `id` integer,
  `album_id` integer,
  `copyright_id` integer
);

CREATE TABLE `external_url_types` (
  `id` integer,
  `name` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `external_urls` (
  `id` integer,
  `url` varchar(255),
  `external_url_type_id` integer,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `album_external_urls` (
  `id` integer,
  `album_id` integer,
  `external_url_id` integer
);

CREATE TABLE `tracks` (
  `id` integer,
  `name` varchar(255),
  `number` integer,
  `explicit` bool DEFAULT false,
  `artist_id` integer,
  `release_date` datetime,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `track_external_urls` (
  `id` integer,
  `track_id` integer,
  `external_url_id` integer
);

CREATE TABLE `track_genres` (
  `id` integer,
  `genre_id` integer,
  `track_id` integer
);

CREATE TABLE `album_tracks` (
  `id` integer,
  `album_id` integer,
  `track_id` integer
);

ALTER TABLE `albums` ADD FOREIGN KEY (`album_type_id`) REFERENCES `album_types` (`id`);

ALTER TABLE `albums` ADD FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

ALTER TABLE `album_types_albums` ADD FOREIGN KEY (`album_type_id`) REFERENCES `album_types` (`id`);

ALTER TABLE `album_types_albums` ADD FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

ALTER TABLE `album_genres` ADD FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

ALTER TABLE `album_genres` ADD FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

ALTER TABLE `media` ADD FOREIGN KEY (`id`) REFERENCES `mediable` (`media_id`);

ALTER TABLE `album_copyrights` ADD FOREIGN KEY (`copyright_id`) REFERENCES `copyrights` (`id`);

ALTER TABLE `album_copyrights` ADD FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

ALTER TABLE `external_urls` ADD FOREIGN KEY (`external_url_type_id`) REFERENCES `external_url_types` (`id`);

ALTER TABLE `album_external_urls` ADD FOREIGN KEY (`external_url_id`) REFERENCES `external_urls` (`id`);

ALTER TABLE `album_external_urls` ADD FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

ALTER TABLE `tracks` ADD FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

ALTER TABLE `track_external_urls` ADD FOREIGN KEY (`external_url_id`) REFERENCES `external_urls` (`id`);

ALTER TABLE `track_external_urls` ADD FOREIGN KEY (`track_id`) REFERENCES `tracks` (`id`);

ALTER TABLE `track_genres` ADD FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

ALTER TABLE `track_genres` ADD FOREIGN KEY (`track_id`) REFERENCES `tracks` (`id`);

ALTER TABLE `album_tracks` ADD FOREIGN KEY (`track_id`) REFERENCES `tracks` (`id`);

ALTER TABLE `album_tracks` ADD FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);
