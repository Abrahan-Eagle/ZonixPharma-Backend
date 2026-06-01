# Implementation Plan: [FEATURE]

**Branch**: `[###-feature-name]` | **Date**: [DATE] | **Spec**: [link]

**Input**: Feature specification from `/specs/[###-feature-name]/spec.md`

**Hub**: ZonixPharma-Backend | **Front sibling**: `../ZonixPharma-Front`

## Summary

[Extract from feature spec: primary requirement + technical approach]

## Technical Context

**Language/Version**: PHP 8.1+ (Laravel 10), Dart 3.5+ (Flutter ≥3.5)

**Primary Dependencies**: Laravel Sanctum, Eloquent, Provider; Flutter Provider, HTTP client via services

**Storage**: MySQL (Backend migrations in `database/migrations/create_*`)

**Testing**: `php artisan test --filter=`, `flutter test`

**Target Platform**: Laravel API + Android/iOS Flutter app

**Project Type**: Dual-repo mobile marketplace (pharma VE)

**Constraints**: Jarvis collaboration (ask before implement); pharma config in `config/zonix.php`; no WebSocket (Pusher+FCM only)

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

- [ ] Dual-repo paths documented (Backend + Front)
- [ ] Pharma rules (Rx, cold chain, payments) addressed if applicable
- [ ] Migration norm respected (edit `create_*` only)
- [ ] Relevant `zonix-*` skills cited

## Project Structure

### Documentation (this feature)

```text
specs/[###-feature]/
├── spec.md
├── plan.md
├── research.md
├── data-model.md
├── quickstart.md
├── contracts/
└── tasks.md
```

### Backend (ZonixPharma-Backend)

```text
app/
├── Http/Controllers/[Role]/
├── Http/Requests/
├── Services/
├── Models/
config/zonix.php
database/migrations/create_*_table.php
tests/Feature/
tests/Unit/
```

### Frontend (../ZonixPharma-Front)

```text
lib/
├── features/screens/[area]/
├── features/services/
├── models/
lib/features/utils/app_colors.dart
lib/config/app_config.dart
test/
```

**Structure Decision**: [Describe which Backend and Front directories this feature touches]

## API Contracts (if applicable)

Document endpoints under `specs/[###-feature]/contracts/` using Zonix envelope:

`{ "success": bool, "data": {}, "message": string }`

## Complexity Tracking

> Fill ONLY if Constitution Check has violations that must be justified

| Violation | Why Needed | Simpler Alternative Rejected Because |
|-----------|------------|-------------------------------------|
